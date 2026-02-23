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

/* admin/purchase/details.html.twig */
class __TwigTemplate_4316035d25b1ec1243c5aebff193f5bd extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/details.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Détails de la commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 3, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- En-tête avec informations du fournisseur -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h4 class=\"mb-0\">
                                <i class=\"fas fa-truck me-2\"></i>
                                Commande #";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 16, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 16), "html", null, true);
        yield "
                            </h4>
                            <p class=\"mb-0 small\">Fournisseur: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 18, $this->source); })()), "supplier", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <span class=\"badge bg-warning fs-6\">
                                <i class=\"fas fa-clock me-1\"></i> Confirmée
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informations du fournisseur</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th width=\"140\">Nom:</th>
                                    <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 35, $this->source); })()), "supplier", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                                </tr>
                                ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 37, $this->source); })()), "supplier", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                                <tr>
                                    <th>Email:</th>
                                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 40, $this->source); })()), "supplier", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 43
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 43, $this->source); })()), "supplier", [], "any", false, false, false, 43), "phone", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                                <tr>
                                    <th>Téléphone:</th>
                                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 46, $this->source); })()), "supplier", [], "any", false, false, false, 46), "phone", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 49
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 49, $this->source); })()), "supplier", [], "any", false, false, false, 49), "address", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                                <tr>
                                    <th>Adresse:</th>
                                    <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 52, $this->source); })()), "supplier", [], "any", false, false, false, 52), "address", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 55
        yield "                            </table>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <h5>Informations de la commande</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th width=\"140\">Date:</th>
                                    <td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 63, $this->source); })()), "createdAt", [], "any", false, false, false, 63), "d/m/Y H:i"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Créé par:</th>
                                    <td>";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, true, false, 67), "fullName", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "fullName", [], "any", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "fullName", [], "any", false, false, false, 67), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67), "html", null, true)));
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Montant total:</th>
                                    <td class=\"fw-bold text-success\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 71, $this->source); })()), "totalAmount", [], "any", false, false, false, 71), "EUR"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Nombre d'articles:</th>
                                    <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 75, $this->source); })()), "purchaseItems", [], "any", false, false, false, 75)), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Liste des produits avec formulaire d'édition -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Produits à réceptionner
                    </h5>
                </div>
                
                <div class=\"card-body\">
                    <form id=\"receiveForm\" method=\"POST\" 
                          action=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        yield "\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th>Produit</th>
                                        <th width=\"120\">Prix unitaire</th>
                                        <th width=\"120\">Quantité</th>
                                        <th width=\"150\">Numéro de lot</th>
                                        <th width=\"120\">Fabrication</th>
                                        <th width=\"120\">Expiration</th>
                                        <th width=\"100\">Total</th>
                                        <th width=\"100\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 110, $this->source); })()), "purchaseItems", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 111
            yield "                                    <tr>
                                        <td>
                                            <strong>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
            yield "</strong><br>
                                            <small class=\"text-muted\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 114), "barcode", [], "any", false, false, false, 114), "html", null, true);
            yield "</small>
                                            ";
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 115), "hasExpiryDate", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "                                                <span class=\"badge bg-info ms-2\">Périssable</span>
                                            ";
            }
            // line 118
            yield "                                        </td>
                                        
                                        <td>
                                            <input type=\"number\" 
                                                   name=\"items[";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 122), "html", null, true);
            yield "][unit_price]\" 
                                                   class=\"form-control form-control-sm unit-price\" 
                                                   value=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 124), "html", null, true);
            yield "\" 
                                                   min=\"0\" 
                                                   step=\"0.01\"
                                                   required>
                                        </td>
                                        
                                        <td>
                                            <input type=\"number\" 
                                                   name=\"items[";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 132), "html", null, true);
            yield "][quantity]\" 
                                                   class=\"form-control form-control-sm quantity\" 
                                                   value=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 134), "html", null, true);
            yield "\" 
                                                   min=\"1\"
                                                   required>
                                        </td>
                                        
                                        <td>
                                            <input type=\"text\" 
                                                   name=\"items[";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 141), "html", null, true);
            yield "][batch_number]\" 
                                                   class=\"form-control form-control-sm batch-number\" 
                                                   value=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 143), "html", null, true);
            yield "\"
                                                   placeholder=\"LOT-";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Ymd"), "html", null, true);
            yield "\">
                                            <small class=\"text-muted\">Auto-généré si vide</small>
                                        </td>
                                        
                                        <td>
                                            ";
            // line 149
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 149), "hasExpiryDate", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "                                                <input type=\"date\" 
                                                       name=\"items[";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 151), "html", null, true);
                yield "][manufacturing_date]\" 
                                                       class=\"form-control form-control-sm manufacturing-date\"
                                                       value=\"";
                // line 153
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 153), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                                            ";
            } else {
                // line 155
                yield "                                                <span class=\"text-muted\">N/A</span>
                                            ";
            }
            // line 157
            yield "                                        </td>
                                        
                                        <td>
                                            ";
            // line 160
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 160), "hasExpiryDate", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 161
                yield "                                                <input type=\"date\" 
                                                       name=\"items[";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 162), "html", null, true);
                yield "][expiry_date]\" 
                                                       class=\"form-control form-control-sm expiry-date\"
                                                       value=\"";
                // line 164
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 164), "Y-m-d"), "html", null, true)) : (""));
                yield "\">
                                            ";
            } else {
                // line 166
                yield "                                                <span class=\"text-muted\">N/A</span>
                                            ";
            }
            // line 168
            yield "                                        </td>
                                        
                                        <td class=\"text-end item-total\">
                                            <span class=\"fw-bold\">
                                                ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 172) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 172)), "EUR"), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        
                                        <td>
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-primary edit-item\"
                                                    data-item-id=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 179), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-edit\"></i>
                                            </button>
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger remove-item\"
                                                    data-item-id=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 184), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"6\" class=\"text-end\"><strong>Total général:</strong></td>
                                        <td class=\"text-end\">
                                            <h5 class=\"mb-0 text-success grand-total\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 195, $this->source); })()), "totalAmount", [], "any", false, false, false, 195), "EUR"), "html", null, true);
        yield "</h5>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("receive_purchase_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203))), "html", null, true);
        yield "\">
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <div>
                                <button type=\"button\" 
                                        class=\"btn btn-outline-danger\" 
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#cancelModal\">
                                    <i class=\"fas fa-times me-2\"></i> Annuler la commande
                                </button>
                            </div>
                            
                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    Retour à la liste
                                </a>
                                <button type=\"button\" 
                                        class=\"btn btn-success btn-lg\" 
                                        id=\"approveBtn\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#approveModal\">
                                    <i class=\"fas fa-check-circle me-2\"></i> Approuver la commande
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'approbation -->
<div class=\"modal fade\" id=\"approveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle me-2\"></i>
                    Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    En confirmant la réception :
                    <ul class=\"mb-0 mt-2\">
                        <li>Le statut passera à \"Reçu\"</li>
                        <li>Le stock sera mis à jour</li>
                        <li>Les numéros de lot seront définitifs</li>
                        <li>Les dates d'expiration seront enregistrées</li>
                    </ul>
                </div>
                <p>Êtes-vous sûr de vouloir approuver cette réception ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmApproveBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer l'approbation
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'annulation -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-times-circle me-2\"></i>
                    Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"POST\" action=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280)]), "html", null, true);
        yield "\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention :</strong> Cette action est irréversible. La commande sera marquée comme annulée.
                    </div>
                    ";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cancel_form"]) || array_key_exists("cancel_form", $context) ? $context["cancel_form"] : (function () { throw new RuntimeError('Variable "cancel_form" does not exist.', 286, $this->source); })()), "reason", [], "any", false, false, false, 286), 'widget');
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-times me-2\"></i> Confirmer l'annulation
                    </button>
                </div>
                ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cancel_form"]) || array_key_exists("cancel_form", $context) ? $context["cancel_form"] : (function () { throw new RuntimeError('Variable "cancel_form" does not exist.', 294, $this->source); })()), 'rest');
        yield "
            </form>
        </div>
    </div>
</div>

<style>
    input[type=\"number\"]::-webkit-inner-spin-button,
    input[type=\"number\"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    .form-control-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
    
    .item-total {
        font-size: 1.1em;
        font-weight: bold;
    }
    
    .grand-total {
        color: var(--bs-success);
        font-size: 1.5em;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calcul automatique des totaux
    function calculateTotals() {
        let grandTotal = 0;
        
        document.querySelectorAll('tbody tr').forEach(row => {
            const unitPrice = parseFloat(row.querySelector('.unit-price').value) || 0;
            const quantity = parseInt(row.querySelector('.quantity').value) || 0;
            const total = unitPrice * quantity;
            
            const totalCell = row.querySelector('.item-total span');
            if (totalCell) {
                totalCell.textContent = new Intl.NumberFormat('fr-FR', {
                    style: 'currency',
                    currency: 'EUR'
                }).format(total);
            }
            
            grandTotal += total;
        });
        
        const grandTotalCell = document.querySelector('.grand-total');
        if (grandTotalCell) {
            grandTotalCell.textContent = new Intl.NumberFormat('fr-FR', {
                style: 'currency',
                currency: 'EUR'
            }).format(grandTotal);
        }
    }
    
    // Écouter les changements de prix et quantité
    document.querySelectorAll('.unit-price, .quantity').forEach(input => {
        input.addEventListener('input', calculateTotals);
    });
    
    // Générer automatiquement les numéros de lot
    document.querySelectorAll('.batch-number').forEach(input => {
        if (!input.value) {
            input.value = 'LOT-' + new Date().toISOString().slice(0,10).replace(/-/g, '') + 
                         '-' + Math.random().toString(36).substr(2, 4).toUpperCase();
        }
    });
    
    // Gérer l'approbation
    const confirmApproveBtn = document.getElementById('confirmApproveBtn');
    if (confirmApproveBtn) {
        confirmApproveBtn.addEventListener('click', function() {
            const form = document.getElementById('receiveForm');
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Rediriger vers la page de reçu
                    window.location.href = data.redirect_url;
                } else {
                    alert('Erreur: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue');
            });
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
        return "admin/purchase/details.html.twig";
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
        return array (  529 => 294,  518 => 286,  509 => 280,  442 => 216,  426 => 203,  415 => 195,  408 => 190,  396 => 184,  388 => 179,  378 => 172,  372 => 168,  368 => 166,  363 => 164,  358 => 162,  355 => 161,  353 => 160,  348 => 157,  344 => 155,  339 => 153,  334 => 151,  331 => 150,  329 => 149,  321 => 144,  317 => 143,  312 => 141,  302 => 134,  297 => 132,  286 => 124,  281 => 122,  275 => 118,  271 => 116,  269 => 115,  265 => 114,  261 => 113,  257 => 111,  253 => 110,  234 => 94,  212 => 75,  205 => 71,  198 => 67,  191 => 63,  181 => 55,  175 => 52,  171 => 50,  168 => 49,  162 => 46,  158 => 44,  155 => 43,  149 => 40,  145 => 38,  143 => 37,  138 => 35,  118 => 18,  113 => 16,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la commande #{{ purchase.purchaseNumber }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- En-tête avec informations du fournisseur -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h4 class=\"mb-0\">
                                <i class=\"fas fa-truck me-2\"></i>
                                Commande #{{ purchase.purchaseNumber }}
                            </h4>
                            <p class=\"mb-0 small\">Fournisseur: {{ purchase.supplier.name }}</p>
                        </div>
                        <div>
                            <span class=\"badge bg-warning fs-6\">
                                <i class=\"fas fa-clock me-1\"></i> Confirmée
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informations du fournisseur</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th width=\"140\">Nom:</th>
                                    <td>{{ purchase.supplier.name }}</td>
                                </tr>
                                {% if purchase.supplier.email %}
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ purchase.supplier.email }}</td>
                                </tr>
                                {% endif %}
                                {% if purchase.supplier.phone %}
                                <tr>
                                    <th>Téléphone:</th>
                                    <td>{{ purchase.supplier.phone }}</td>
                                </tr>
                                {% endif %}
                                {% if purchase.supplier.address %}
                                <tr>
                                    <th>Adresse:</th>
                                    <td>{{ purchase.supplier.address }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <h5>Informations de la commande</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th width=\"140\">Date:</th>
                                    <td>{{ purchase.createdAt|date('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Créé par:</th>
                                    <td>{{ purchase.user.fullName ?? purchase.user.email }}</td>
                                </tr>
                                <tr>
                                    <th>Montant total:</th>
                                    <td class=\"fw-bold text-success\">{{ purchase.totalAmount|format_currency('EUR') }}</td>
                                </tr>
                                <tr>
                                    <th>Nombre d'articles:</th>
                                    <td>{{ purchase.purchaseItems|length }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Liste des produits avec formulaire d'édition -->
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i>
                        Produits à réceptionner
                    </h5>
                </div>
                
                <div class=\"card-body\">
                    <form id=\"receiveForm\" method=\"POST\" 
                          action=\"{{ path('admin_purchase_receive', {'id': purchase.id}) }}\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th>Produit</th>
                                        <th width=\"120\">Prix unitaire</th>
                                        <th width=\"120\">Quantité</th>
                                        <th width=\"150\">Numéro de lot</th>
                                        <th width=\"120\">Fabrication</th>
                                        <th width=\"120\">Expiration</th>
                                        <th width=\"100\">Total</th>
                                        <th width=\"100\">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for item in purchase.purchaseItems %}
                                    <tr>
                                        <td>
                                            <strong>{{ item.product.name }}</strong><br>
                                            <small class=\"text-muted\">{{ item.product.barcode }}</small>
                                            {% if item.product.hasExpiryDate %}
                                                <span class=\"badge bg-info ms-2\">Périssable</span>
                                            {% endif %}
                                        </td>
                                        
                                        <td>
                                            <input type=\"number\" 
                                                   name=\"items[{{ item.id }}][unit_price]\" 
                                                   class=\"form-control form-control-sm unit-price\" 
                                                   value=\"{{ item.unitPrice }}\" 
                                                   min=\"0\" 
                                                   step=\"0.01\"
                                                   required>
                                        </td>
                                        
                                        <td>
                                            <input type=\"number\" 
                                                   name=\"items[{{ item.id }}][quantity]\" 
                                                   class=\"form-control form-control-sm quantity\" 
                                                   value=\"{{ item.quantity }}\" 
                                                   min=\"1\"
                                                   required>
                                        </td>
                                        
                                        <td>
                                            <input type=\"text\" 
                                                   name=\"items[{{ item.id }}][batch_number]\" 
                                                   class=\"form-control form-control-sm batch-number\" 
                                                   value=\"{{ item.batchNumber }}\"
                                                   placeholder=\"LOT-{{ \"now\"|date('Ymd') }}\">
                                            <small class=\"text-muted\">Auto-généré si vide</small>
                                        </td>
                                        
                                        <td>
                                            {% if item.product.hasExpiryDate %}
                                                <input type=\"date\" 
                                                       name=\"items[{{ item.id }}][manufacturing_date]\" 
                                                       class=\"form-control form-control-sm manufacturing-date\"
                                                       value=\"{{ item.manufacturingDate ? item.manufacturingDate|date('Y-m-d') : '' }}\">
                                            {% else %}
                                                <span class=\"text-muted\">N/A</span>
                                            {% endif %}
                                        </td>
                                        
                                        <td>
                                            {% if item.product.hasExpiryDate %}
                                                <input type=\"date\" 
                                                       name=\"items[{{ item.id }}][expiry_date]\" 
                                                       class=\"form-control form-control-sm expiry-date\"
                                                       value=\"{{ item.expiryDate ? item.expiryDate|date('Y-m-d') : '' }}\">
                                            {% else %}
                                                <span class=\"text-muted\">N/A</span>
                                            {% endif %}
                                        </td>
                                        
                                        <td class=\"text-end item-total\">
                                            <span class=\"fw-bold\">
                                                {{ (item.unitPrice * item.quantity)|format_currency('EUR') }}
                                            </span>
                                        </td>
                                        
                                        <td>
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-primary edit-item\"
                                                    data-item-id=\"{{ item.id }}\">
                                                <i class=\"fas fa-edit\"></i>
                                            </button>
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger remove-item\"
                                                    data-item-id=\"{{ item.id }}\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"6\" class=\"text-end\"><strong>Total général:</strong></td>
                                        <td class=\"text-end\">
                                            <h5 class=\"mb-0 text-success grand-total\">{{ purchase.totalAmount|format_currency('EUR') }}</h5>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('receive_purchase_' ~ purchase.id) }}\">
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <div>
                                <button type=\"button\" 
                                        class=\"btn btn-outline-danger\" 
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#cancelModal\">
                                    <i class=\"fas fa-times me-2\"></i> Annuler la commande
                                </button>
                            </div>
                            
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('admin_purchase_index') }}\" class=\"btn btn-outline-secondary\">
                                    Retour à la liste
                                </a>
                                <button type=\"button\" 
                                        class=\"btn btn-success btn-lg\" 
                                        id=\"approveBtn\"
                                        data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#approveModal\">
                                    <i class=\"fas fa-check-circle me-2\"></i> Approuver la commande
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'approbation -->
<div class=\"modal fade\" id=\"approveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-check-circle me-2\"></i>
                    Confirmer la réception
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    En confirmant la réception :
                    <ul class=\"mb-0 mt-2\">
                        <li>Le statut passera à \"Reçu\"</li>
                        <li>Le stock sera mis à jour</li>
                        <li>Les numéros de lot seront définitifs</li>
                        <li>Les dates d'expiration seront enregistrées</li>
                    </ul>
                </div>
                <p>Êtes-vous sûr de vouloir approuver cette réception ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-success\" id=\"confirmApproveBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer l'approbation
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'annulation -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-times-circle me-2\"></i>
                    Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"POST\" action=\"{{ path('admin_purchase_details', {'id': purchase.id}) }}\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention :</strong> Cette action est irréversible. La commande sera marquée comme annulée.
                    </div>
                    {{ form_widget(cancel_form.reason) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-times me-2\"></i> Confirmer l'annulation
                    </button>
                </div>
                {{ form_rest(cancel_form) }}
            </form>
        </div>
    </div>
</div>

<style>
    input[type=\"number\"]::-webkit-inner-spin-button,
    input[type=\"number\"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    .form-control-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
    
    .item-total {
        font-size: 1.1em;
        font-weight: bold;
    }
    
    .grand-total {
        color: var(--bs-success);
        font-size: 1.5em;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calcul automatique des totaux
    function calculateTotals() {
        let grandTotal = 0;
        
        document.querySelectorAll('tbody tr').forEach(row => {
            const unitPrice = parseFloat(row.querySelector('.unit-price').value) || 0;
            const quantity = parseInt(row.querySelector('.quantity').value) || 0;
            const total = unitPrice * quantity;
            
            const totalCell = row.querySelector('.item-total span');
            if (totalCell) {
                totalCell.textContent = new Intl.NumberFormat('fr-FR', {
                    style: 'currency',
                    currency: 'EUR'
                }).format(total);
            }
            
            grandTotal += total;
        });
        
        const grandTotalCell = document.querySelector('.grand-total');
        if (grandTotalCell) {
            grandTotalCell.textContent = new Intl.NumberFormat('fr-FR', {
                style: 'currency',
                currency: 'EUR'
            }).format(grandTotal);
        }
    }
    
    // Écouter les changements de prix et quantité
    document.querySelectorAll('.unit-price, .quantity').forEach(input => {
        input.addEventListener('input', calculateTotals);
    });
    
    // Générer automatiquement les numéros de lot
    document.querySelectorAll('.batch-number').forEach(input => {
        if (!input.value) {
            input.value = 'LOT-' + new Date().toISOString().slice(0,10).replace(/-/g, '') + 
                         '-' + Math.random().toString(36).substr(2, 4).toUpperCase();
        }
    });
    
    // Gérer l'approbation
    const confirmApproveBtn = document.getElementById('confirmApproveBtn');
    if (confirmApproveBtn) {
        confirmApproveBtn.addEventListener('click', function() {
            const form = document.getElementById('receiveForm');
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Rediriger vers la page de reçu
                    window.location.href = data.redirect_url;
                } else {
                    alert('Erreur: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue');
            });
        });
    }
});
</script>
{% endblock %}", "admin/purchase/details.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\details.html.twig");
    }
}
