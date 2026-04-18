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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
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
    .card-footer-actions {
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }
    .select2-container--bootstrap-5 .select2-selection {
        min-height: 38px;
        border-radius: 0.375rem;
    }
    .location-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }
    .btn-sm-custom {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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

        // line 54
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
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"bi bi-eye\"></i> Voir la commande
                    </a>
                    <a href=\"";
        // line 66
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
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 83, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 83), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Fournisseur</small>
                            <div class=\"fw-bold\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 87, $this->source); })()), "supplier", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Date commande</small>
                            <div class=\"fw-bold\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 91, $this->source); })()), "createdAt", [], "any", false, false, false, 91), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Total initial</small>
                            <div class=\"fw-bold text-primary\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 95, $this->source); })()), "totalAmount", [], "any", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 95, $this->source); })()), "hmaService", [], "any", false, false, false, 95)), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de réception -->
            <form method=\"POST\" class=\"receive-form\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 103, $this->source); })()), "purchaseItems", [], "any", false, false, false, 103));
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
            // line 104
            yield "                    ";
            $context["product"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 104);
            // line 105
            yield "                    <div class=\"card shadow-sm batch-card\">
                        <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                            <div class=\"d-flex align-items-center\">
                                ";
            // line 108
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "image", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 109, $this->source); })()), "image", [], "any", false, false, false, 109))), "html", null, true);
                yield "\" 
                                         alt=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), "html", null, true);
                yield "\" 
                                         class=\"rounded me-3\"
                                         style=\"width: 40px; height: 40px; object-fit: cover;\">
                                ";
            } else {
                // line 114
                yield "                                    <div class=\"bg-light rounded me-3 d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"bi bi-box text-secondary\"></i>
                                    </div>
                                ";
            }
            // line 118
            yield "                                <div>
                                    <h6 class=\"mb-0\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">
                                        Code: ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 121, $this->source); })()), "barcode", [], "any", false, false, false, 121), "html", null, true);
            yield " | 
                                        Unité: ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 122, $this->source); })()), "unit", [], "any", false, false, false, 122), "pièce")) : ("pièce")), "html", null, true);
            yield "
                                        ";
            // line 123
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 123, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 124
                yield "                                            <span class=\"perishable-badge ms-2\">
                                                <i class=\"bi bi-calendar-exclamation\"></i> Périssable
                                            </span>
                                        ";
            }
            // line 128
            yield "                                    </small>
                                </div>
                            </div>
                            <div class=\"text-end\">
                                <div class=\"fw-bold text-primary\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 132, $this->source); })()), "hmaService", [], "any", false, false, false, 132)), "html", null, true);
            yield "</div>
                                <small class=\"text-muted\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 133), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 133, $this->source); })()), "hmaService", [], "any", false, false, false, 133)), "html", null, true);
            yield "/unité</small>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <input type=\"hidden\" name=\"item_id[]\" value=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 137), "html", null, true);
            yield "\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input remove-checkbox\" type=\"checkbox\" 
                                               name=\"remove_";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\" id=\"remove_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\" value=\"1\">
                                        <label class=\"form-check-label text-danger\" for=\"remove_";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 144), "html", null, true);
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
            // line 155
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 155, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "                                            <span class=\"text-danger\">*</span>
                                        ";
            }
            // line 158
            yield "                                    </label>
                                    <input type=\"text\" 
                                           name=\"batch_number_";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 160), "html", null, true);
            yield "\" 
                                           class=\"form-control\" 
                                           value=\"";
            // line 162
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 162)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 162), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("LOT-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 162, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 162)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162)), "html", null, true)));
            yield "\"
                                           ";
            // line 163
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 163, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "required";
            }
            // line 164
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
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 174), "html", null, true);
            yield "\" 
                                           readonly disabled>
                                </div>

                                <div class=\"col-md-4 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-check-circle\"></i> Quantité reçue
                                    </label>
                                    <input type=\"number\" 
                                           name=\"received_quantity_";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 183), "html", null, true);
            yield "\" 
                                           class=\"form-control received-quantity\" 
                                           value=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 185), "html", null, true);
            yield "\"
                                           min=\"0\"
                                           step=\"1\">
                                </div>
                            </div>

                            <div class=\"row mt-3\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-tag\"></i> Prix unitaire commandé
                                    </label>
                                    <input type=\"text\" 
                                        class=\"form-control\" 
                                        value=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 198)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 198)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 198, $this->source); })()), "hmaService", [], "any", false, false, false, 198)), "html", null, true);
            yield "\" 
                                        readonly disabled>
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-pencil\"></i> Prix unitaire réel
                                    </label>
                                    <input type=\"number\" 
                                        name=\"received_price_";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 207), "html", null, true);
            yield "\" 
                                        class=\"form-control received-price\" 
                                        value=\"";
            // line 209
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 209)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 209), "html", null, true)) : (0));
            yield "\"
                                        step=\"0.01\"
                                        min=\"0\">
                                    <small class=\"text-muted\">Prix en ";
            // line 212
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 212, $this->source); })()), "hmaService", [], "any", false, false, false, 212), "country", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 212, $this->source); })()), "hmaService", [], "any", false, false, false, 212), "country", [], "any", false, false, false, 212) == "CM")) ? ("XAF") : ("FCFA"))) : ("XAF"));
            yield "</small>
                                </div>
                            </div>

                            <!-- Sélection de l'emplacement avec Select2 -->
                            <div class=\"row mt-3\">
                                <div class=\"col-md-12 mb-3\">
                                    <div class=\"location-header\">
                                        <label class=\"form-label fw-bold\">
                                            <i class=\"bi bi-geo-alt\"></i> Emplacement
                                        </label>
                                        <a href=\"";
            // line 223
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
            yield "\" 
                                           class=\"btn btn-outline-primary btn-sm-custom\" 
                                           target=\"_blank\"
                                           title=\"Gérer les emplacements\">
                                            <i class=\"bi bi-geo-alt\"></i> Gérer les emplacements
                                        </a>
                                    </div>
                                    <select name=\"location_id_";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 230), "html", null, true);
            yield "\" 
                                            class=\"form-select location-select\"
                                            data-placeholder=\"-- Sélectionner un emplacement --\">
                                        <option value=\"\">-- Sélectionner un emplacement --</option>
                                        ";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 234, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 235
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 235), "html", null, true);
                yield "\" 
                                                    data-code=\"";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 236), "html", null, true);
                yield "\"
                                                    data-name=\"";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 237), "html", null, true);
                yield "\">
                                                ";
                // line 238
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["location"], "code", [], "any", false, false, false, 238) . " - "), "html", null, true)) : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 238), "html", null, true);
                yield "
                                            </option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "                                    </select>
                                    <div class=\"form-text\">
                                        <i class=\"bi bi-info-circle\"></i>
                                        Sélectionnez l'emplacement physique où seront stockés ces produits.
                                    </div>
                                </div>
                            </div>

                            ";
            // line 249
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 249, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 250
                yield "                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-calendar-plus\"></i> Date de fabrication
                                        <span class=\"text-danger\">*</span>
                                    </label>
                                    <input type=\"date\" 
                                           name=\"manufacturing_date_";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 257), "html", null, true);
                yield "\" 
                                           class=\"form-control\" 
                                           required
                                           value=\"";
                // line 260
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
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 269), "html", null, true);
                yield "\" 
                                           class=\"form-control\" 
                                           required
                                           min=\"";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
                yield "\">
                                </div>
                            </div>
                            ";
            } else {
                // line 276
                yield "                            <div class=\"alert alert-success mb-0\">
                                <i class=\"bi bi-check-circle\"></i>
                                Ce produit n'est pas périssable. Le lot sera créé automatiquement.
                            </div>
                            ";
            }
            // line 281
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
        // line 284
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
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 294, $this->source); })()), "id", [], "any", false, false, false, 294)]), "html", null, true);
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

    // line 309
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

        // line 310
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 POUR LES EMPLACEMENTS ==========
    const locationSelects = document.querySelectorAll('.location-select');
    locationSelects.forEach(select => {
        \$(select).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Sélectionner un emplacement --',
            allowClear: true,
            width: '100%'
        });
    });

    // ========== GESTION DE LA CASE \"NE PAS RÉCEPTIONNER\" ==========
    const checkboxes = document.querySelectorAll('.remove-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.batch-card');
            const inputs = card.querySelectorAll('input:not([type=\"checkbox\"]), select');
            const select2Container = card.querySelector('.select2-container');
            
            inputs.forEach(input => {
                input.disabled = this.checked;
            });
            
            // Désactiver Select2
            if (select2Container) {
                const select = card.querySelector('.location-select');
                if (this.checked) {
                    \$(select).select2('disable');
                } else {
                    \$(select).select2('enable');
                }
            }
            
            // Désactiver les champs de date
            const dateInputs = card.querySelectorAll('input[type=\"date\"]');
            dateInputs.forEach(input => input.disabled = this.checked);
        });
    });

    // ========== VALIDATION DES DATES D'EXPIRATION ==========
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
    
    // ========== CONFIRMATION AVANT SOUMISSION ==========
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
        return array (  630 => 310,  617 => 309,  592 => 294,  580 => 284,  564 => 281,  557 => 276,  550 => 272,  544 => 269,  532 => 260,  526 => 257,  517 => 250,  515 => 249,  505 => 241,  495 => 238,  491 => 237,  487 => 236,  482 => 235,  478 => 234,  471 => 230,  461 => 223,  447 => 212,  441 => 209,  436 => 207,  424 => 198,  408 => 185,  403 => 183,  391 => 174,  379 => 164,  375 => 163,  371 => 162,  366 => 160,  362 => 158,  358 => 156,  356 => 155,  342 => 144,  336 => 143,  327 => 137,  320 => 133,  316 => 132,  310 => 128,  304 => 124,  302 => 123,  298 => 122,  294 => 121,  289 => 119,  286 => 118,  280 => 114,  273 => 110,  268 => 109,  266 => 108,  261 => 105,  258 => 104,  241 => 103,  230 => 95,  223 => 91,  216 => 87,  209 => 83,  189 => 66,  183 => 63,  172 => 54,  159 => 53,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/receive.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Réceptionner la commande {{ purchase.purchaseNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
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
    .card-footer-actions {
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }
    .select2-container--bootstrap-5 .select2-selection {
        min-height: 38px;
        border-radius: 0.375rem;
    }
    .location-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }
    .btn-sm-custom {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
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
                            <div class=\"fw-bold text-primary\">{{ purchase.totalAmount|price_with_currency(purchase.hmaService) }}</div>
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
                                <div class=\"fw-bold text-primary\">{{ item.totalPrice|price_with_currency(purchase.hmaService) }}</div>
                                <small class=\"text-muted\">{{ item.unitPrice|price_with_currency(purchase.hmaService) }}/unité</small>
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
                                        <i class=\"bi bi-tag\"></i> Prix unitaire commandé
                                    </label>
                                    <input type=\"text\" 
                                        class=\"form-control\" 
                                        value=\"{{ (item.unitPrice ?: 0)|price_with_currency(purchase.hmaService) }}\" 
                                        readonly disabled>
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    <label class=\"form-label fw-bold\">
                                        <i class=\"bi bi-pencil\"></i> Prix unitaire réel
                                    </label>
                                    <input type=\"number\" 
                                        name=\"received_price_{{ item.id }}\" 
                                        class=\"form-control received-price\" 
                                        value=\"{{ item.unitPrice ?: 0 }}\"
                                        step=\"0.01\"
                                        min=\"0\">
                                    <small class=\"text-muted\">Prix en {{ purchase.hmaService.country ? (purchase.hmaService.country == 'CM' ? 'XAF' : 'FCFA') : 'XAF' }}</small>
                                </div>
                            </div>

                            <!-- Sélection de l'emplacement avec Select2 -->
                            <div class=\"row mt-3\">
                                <div class=\"col-md-12 mb-3\">
                                    <div class=\"location-header\">
                                        <label class=\"form-label fw-bold\">
                                            <i class=\"bi bi-geo-alt\"></i> Emplacement
                                        </label>
                                        <a href=\"{{ path('app_admin_location_index') }}\" 
                                           class=\"btn btn-outline-primary btn-sm-custom\" 
                                           target=\"_blank\"
                                           title=\"Gérer les emplacements\">
                                            <i class=\"bi bi-geo-alt\"></i> Gérer les emplacements
                                        </a>
                                    </div>
                                    <select name=\"location_id_{{ item.id }}\" 
                                            class=\"form-select location-select\"
                                            data-placeholder=\"-- Sélectionner un emplacement --\">
                                        <option value=\"\">-- Sélectionner un emplacement --</option>
                                        {% for location in locations %}
                                            <option value=\"{{ location.id }}\" 
                                                    data-code=\"{{ location.code }}\"
                                                    data-name=\"{{ location.name }}\">
                                                {{ location.code ? location.code ~ ' - ' : '' }}{{ location.name }}
                                            </option>
                                        {% endfor %}
                                    </select>
                                    <div class=\"form-text\">
                                        <i class=\"bi bi-info-circle\"></i>
                                        Sélectionnez l'emplacement physique où seront stockés ces produits.
                                    </div>
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
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 POUR LES EMPLACEMENTS ==========
    const locationSelects = document.querySelectorAll('.location-select');
    locationSelects.forEach(select => {
        \$(select).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Sélectionner un emplacement --',
            allowClear: true,
            width: '100%'
        });
    });

    // ========== GESTION DE LA CASE \"NE PAS RÉCEPTIONNER\" ==========
    const checkboxes = document.querySelectorAll('.remove-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const card = this.closest('.batch-card');
            const inputs = card.querySelectorAll('input:not([type=\"checkbox\"]), select');
            const select2Container = card.querySelector('.select2-container');
            
            inputs.forEach(input => {
                input.disabled = this.checked;
            });
            
            // Désactiver Select2
            if (select2Container) {
                const select = card.querySelector('.location-select');
                if (this.checked) {
                    \$(select).select2('disable');
                } else {
                    \$(select).select2('enable');
                }
            }
            
            // Désactiver les champs de date
            const dateInputs = card.querySelectorAll('input[type=\"date\"]');
            dateInputs.forEach(input => input.disabled = this.checked);
        });
    });

    // ========== VALIDATION DES DATES D'EXPIRATION ==========
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
    
    // ========== CONFIRMATION AVANT SOUMISSION ==========
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
