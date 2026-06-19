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

/* purchase/new.html.twig */
class __TwigTemplate_3bb4c6db68ef644fc4ea1891421aa9a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/new.html.twig"));

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

        yield "Valider la réception";
        
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
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-clipboard-check me-2\"></i>
                        Validation de la réception
                    </h4>
                </div>
                <div class=\"card-body\">
                    <!-- Récapitulatif -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card border-primary\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5 class=\"mb-0\">
                                        <i class=\"fas fa-info-circle me-2\"></i>
                                        Récapitulatif
                                    </h5>
                                </div>
                                <div class=\"card-body\">
                                    <table class=\"table table-sm\">
                                        <tr>
                                            <th>Nombre de produits :</th>
                                            <td class=\"text-end\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "</td>
                                        </tr>
                                        <tr>
                                            <th>Fournisseur :</th>
                                            <td class=\"text-end\">
                                                ";
        // line 36
        if ((($tmp = (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                                ";
        } else {
            // line 39
            yield "                                                    <span class=\"text-warning\">Non spécifié</span>
                                                ";
        }
        // line 41
        yield "                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total d'achat :</th>
                                            <td class=\"text-end h5 text-success\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total_amount"]) || array_key_exists("total_amount", $context) ? $context["total_amount"] : (function () { throw new RuntimeError('Variable "total_amount" does not exist.', 45, $this->source); })()), "EUR"), "html", null, true);
        yield "</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card border-warning\">
                                <div class=\"card-header bg-warning text-dark\">
                                    <h5 class=\"mb-0\">
                                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                        Important
                                    </h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-check-circle text-success me-2\"></i>
                                        La validation va :
                                    </p>
                                    <ul class=\"small mb-0\">
                                        <li>Enregistrer l'achat dans l'historique</li>
                                        <li>Créer les lots de stock</li>
                                        <li>Mettre à jour les quantités en stock</li>
                                        <li>Enregistrer les mouvements de stock</li>
                                    </ul>
                                    <div class=\"alert alert-info mt-3 mb-0 py-2\">
                                        <i class=\"fas fa-info-circle me-2\"></i>
                                        Cette action est définitive et ne peut être annulée.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Détail des produits -->
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Détail des produits</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Produit</th>
                                            <th class=\"text-center\">N° Lot</th>
                                            <th class=\"text-center\">Quantité</th>
                                            <th class=\"text-center\">Prix unitaire</th>
                                            <th class=\"text-center\">Total</th>
                                            <th class=\"text-center\">Dates</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            yield "                                            <tr>
                                                <td>
                                                    <strong>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 101), "html", null, true);
            yield "</strong><br>
                                                    <small class=\"text-muted\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "barcode", [], "any", false, false, false, 102), "html", null, true);
            yield "</small>
                                                </td>
                                                <td class=\"text-center\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batch_number", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 106), "EUR"), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "purchase_price", [], "any", false, false, false, 107) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 107)), "EUR"), "html", null, true);
            yield "</td>
                                                <td class=\"text-center small\">
                                                    ";
            // line 109
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "has_expiry_date", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturing_date", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 111
                    yield "                                                            Fab: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturing_date", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                    yield "<br>
                                                        ";
                }
                // line 113
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiry_date", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "                                                            Exp: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiry_date", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true);
                    yield "
                                                        ";
                }
                // line 116
                yield "                                                    ";
            } else {
                // line 117
                yield "                                                        <span class=\"text-muted\">Non périssable</span>
                                                    ";
            }
            // line 119
            yield "                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire de validation -->
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                Finaliser la réception
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_start');
        yield "
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "supplier", [], "any", false, false, false, 140), 'row');
        yield "
                                        
                                        ";
        // line 142
        if ((($tmp =  !(isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 142, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 143
            yield "                                            <div class=\"alert alert-warning mt-3\">
                                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                                Aucun fournisseur n'a été sélectionné. Vous pouvez en choisir un ci-dessous.
                                            </div>
                                        ";
        }
        // line 148
        yield "                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "notes", [], "any", false, false, false, 150), 'row');
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 d-flex justify-content-between\">
                                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_cart");
        yield "\" class=\"btn btn-outline-secondary\">
                                        <i class=\"fas fa-arrow-left me-2\"></i>
                                        Retour au panier
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-success btn-lg px-5\">
                                        <i class=\"fas fa-save me-2\"></i>
                                        Enregistrer la réception
                                    </button>
                                </div>
                            ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        return "purchase/new.html.twig";
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
        return array (  339 => 164,  327 => 155,  319 => 150,  315 => 148,  308 => 143,  306 => 142,  301 => 140,  295 => 137,  278 => 122,  270 => 119,  266 => 117,  263 => 116,  257 => 114,  254 => 113,  248 => 111,  245 => 110,  243 => 109,  238 => 107,  234 => 106,  230 => 105,  226 => 104,  221 => 102,  217 => 101,  213 => 99,  209 => 98,  153 => 45,  147 => 41,  143 => 39,  137 => 37,  135 => 36,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Valider la réception{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-clipboard-check me-2\"></i>
                        Validation de la réception
                    </h4>
                </div>
                <div class=\"card-body\">
                    <!-- Récapitulatif -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card border-primary\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5 class=\"mb-0\">
                                        <i class=\"fas fa-info-circle me-2\"></i>
                                        Récapitulatif
                                    </h5>
                                </div>
                                <div class=\"card-body\">
                                    <table class=\"table table-sm\">
                                        <tr>
                                            <th>Nombre de produits :</th>
                                            <td class=\"text-end\">{{ cart|length }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fournisseur :</th>
                                            <td class=\"text-end\">
                                                {% if supplier %}
                                                    {{ supplier.name }}
                                                {% else %}
                                                    <span class=\"text-warning\">Non spécifié</span>
                                                {% endif %}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Total d'achat :</th>
                                            <td class=\"text-end h5 text-success\">{{ total_amount|format_currency('EUR') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card border-warning\">
                                <div class=\"card-header bg-warning text-dark\">
                                    <h5 class=\"mb-0\">
                                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                        Important
                                    </h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"mb-2\">
                                        <i class=\"fas fa-check-circle text-success me-2\"></i>
                                        La validation va :
                                    </p>
                                    <ul class=\"small mb-0\">
                                        <li>Enregistrer l'achat dans l'historique</li>
                                        <li>Créer les lots de stock</li>
                                        <li>Mettre à jour les quantités en stock</li>
                                        <li>Enregistrer les mouvements de stock</li>
                                    </ul>
                                    <div class=\"alert alert-info mt-3 mb-0 py-2\">
                                        <i class=\"fas fa-info-circle me-2\"></i>
                                        Cette action est définitive et ne peut être annulée.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Détail des produits -->
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Détail des produits</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-sm\">
                                    <thead>
                                        <tr>
                                            <th>Produit</th>
                                            <th class=\"text-center\">N° Lot</th>
                                            <th class=\"text-center\">Quantité</th>
                                            <th class=\"text-center\">Prix unitaire</th>
                                            <th class=\"text-center\">Total</th>
                                            <th class=\"text-center\">Dates</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for item in cart %}
                                            <tr>
                                                <td>
                                                    <strong>{{ item.product_name }}</strong><br>
                                                    <small class=\"text-muted\">{{ item.barcode }}</small>
                                                </td>
                                                <td class=\"text-center\">{{ item.batch_number }}</td>
                                                <td class=\"text-center\">{{ item.quantity }}</td>
                                                <td class=\"text-center\">{{ item.purchase_price|format_currency('EUR') }}</td>
                                                <td class=\"text-center\">{{ (item.purchase_price * item.quantity)|format_currency('EUR') }}</td>
                                                <td class=\"text-center small\">
                                                    {% if item.has_expiry_date %}
                                                        {% if item.manufacturing_date %}
                                                            Fab: {{ item.manufacturing_date|date('d/m/Y') }}<br>
                                                        {% endif %}
                                                        {% if item.expiry_date %}
                                                            Exp: {{ item.expiry_date|date('d/m/Y') }}
                                                        {% endif %}
                                                    {% else %}
                                                        <span class=\"text-muted\">Non périssable</span>
                                                    {% endif %}
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Formulaire de validation -->
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                Finaliser la réception
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            {{ form_start(form) }}
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.supplier) }}
                                        
                                        {% if not supplier %}
                                            <div class=\"alert alert-warning mt-3\">
                                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                                Aucun fournisseur n'a été sélectionné. Vous pouvez en choisir un ci-dessous.
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.notes) }}
                                    </div>
                                </div>
                                
                                <div class=\"mt-4 d-flex justify-content-between\">
                                    <a href=\"{{ path('admin_purchase_cart') }}\" class=\"btn btn-outline-secondary\">
                                        <i class=\"fas fa-arrow-left me-2\"></i>
                                        Retour au panier
                                    </a>
                                    <button type=\"submit\" class=\"btn btn-success btn-lg px-5\">
                                        <i class=\"fas fa-save me-2\"></i>
                                        Enregistrer la réception
                                    </button>
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "purchase/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\new.html.twig");
    }
}
