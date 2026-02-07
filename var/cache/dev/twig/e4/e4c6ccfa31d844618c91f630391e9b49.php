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

/* admin/purchase/waiting_receipt.html.twig */
class __TwigTemplate_a107c0390e487cbbd25e3aca1c9fa58e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/waiting_receipt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/waiting_receipt.html.twig"));

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

        yield "Commandes en attente de réception";
        
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
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-clock me-2 text-warning\"></i>
                        Commandes en attente de réception
                    </h4>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_cart");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Nouvelle commande
                    </a>
                </div>
                
                <div class=\"card-body\">
                    <!-- Recherche rapide par numéro -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <input type=\"text\" 
                                       id=\"searchPurchaseNumber\" 
                                       class=\"form-control\" 
                                       placeholder=\"Scanner ou saisir le numéro de commande...\">
                                <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"searchPurchaseBtn\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-end\">
                            <span class=\"badge bg-warning text-dark\">
                                ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 36, $this->source); })())), "html", null, true);
        yield " commande(s) en attente
                            </span>
                        </div>
                    </div>
                    
                    <!-- Liste des commandes -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Numéro commande</th>
                                    <th>Fournisseur</th>
                                    <th class=\"text-center\">Date confirmation</th>
                                    <th class=\"text-center\">Articles</th>
                                    <th class=\"text-end\">Montant</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 56
            yield "                                <tr>
                                    <td>
                                        <strong>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseNumber", [], "any", false, false, false, 58), "html", null, true);
            yield "</strong>
                                        <div class=\"small text-muted\">
                                            Créé par ";
            // line 60
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "user", [], "any", false, true, false, 60), "fullName", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "user", [], "any", false, false, false, 60), "fullName", [], "any", false, false, false, 60)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "user", [], "any", false, false, false, 60), "fullName", [], "any", false, false, false, 60), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "user", [], "any", false, false, false, 60), "email", [], "any", false, false, false, 60), "html", null, true)));
            yield "
                                        </div>
                                    </td>
                                    <td>
                                        ";
            // line 64
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                                        <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                yield "</strong>
                                        <div class=\"small text-muted\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
                yield "</div>
                                        ";
            }
            // line 68
            yield "                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "confirmedAt", [], "any", false, false, false, 70), "d/m/Y H:i"), "html", null, true);
            yield "
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-info\">
                                            ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseItems", [], "any", false, false, false, 74)), "html", null, true);
            yield " produit(s)
                                        </span>
                                    </td>
                                    <td class=\"text-end\">
                                        <strong>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "totalAmount", [], "any", false, false, false, 78), "EUR"), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td class=\"text-center\">
                                        <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-info\">
                                            <i class=\"fas fa-eye\"></i> Voir le détail
                                        </a>
                                    </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-4\">
                                        <i class=\"fas fa-check-circle fa-3x text-success mb-3\"></i>
                                        <h5 class=\"text-success\">Aucune commande en attente</h5>
                                        <p class=\"text-muted\">Toutes les commandes ont été réceptionnées</p>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['purchase'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchPurchaseNumber');
    const searchBtn = document.getElementById('searchPurchaseBtn');
    
    // Scanner ou recherche rapide
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            searchPurchase();
        }
    });
    
    searchBtn.addEventListener('click', searchPurchase);
    
    function searchPurchase() {
        const purchaseNumber = searchInput.value.trim().toUpperCase();
        
        if (!purchaseNumber) {
            return;
        }
        
        // Trouver la commande correspondante
        const rows = document.querySelectorAll('tbody tr');
        let found = false;
        
        rows.forEach(row => {
            const rowNumber = row.querySelector('strong').textContent;
            if (rowNumber.includes(purchaseNumber)) {
                row.scrollIntoView({ behavior: 'smooth', block: 'center' });
                row.classList.add('table-success');
                setTimeout(() => row.classList.remove('table-success'), 2000);
                found = true;
            }
        });
        
        if (!found) {
            alert('Commande non trouvée : ' + purchaseNumber);
        }
        
        searchInput.value = '';
        searchInput.focus();
    }
    
    // Focus automatique
    searchInput.focus();
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
        return "admin/purchase/waiting_receipt.html.twig";
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
        return array (  240 => 96,  227 => 88,  225 => 87,  214 => 81,  208 => 78,  201 => 74,  194 => 70,  190 => 68,  185 => 66,  180 => 65,  178 => 64,  171 => 60,  166 => 58,  162 => 56,  157 => 55,  135 => 36,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commandes en attente de réception{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                    <h4 class=\"mb-0\">
                        <i class=\"fas fa-clock me-2 text-warning\"></i>
                        Commandes en attente de réception
                    </h4>
                    <a href=\"{{ path('admin_purchase_cart') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus me-1\"></i> Nouvelle commande
                    </a>
                </div>
                
                <div class=\"card-body\">
                    <!-- Recherche rapide par numéro -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <input type=\"text\" 
                                       id=\"searchPurchaseNumber\" 
                                       class=\"form-control\" 
                                       placeholder=\"Scanner ou saisir le numéro de commande...\">
                                <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"searchPurchaseBtn\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-end\">
                            <span class=\"badge bg-warning text-dark\">
                                {{ purchases|length }} commande(s) en attente
                            </span>
                        </div>
                    </div>
                    
                    <!-- Liste des commandes -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Numéro commande</th>
                                    <th>Fournisseur</th>
                                    <th class=\"text-center\">Date confirmation</th>
                                    <th class=\"text-center\">Articles</th>
                                    <th class=\"text-end\">Montant</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for purchase in purchases %}
                                <tr>
                                    <td>
                                        <strong>{{ purchase.purchaseNumber }}</strong>
                                        <div class=\"small text-muted\">
                                            Créé par {{ purchase.user.fullName ?? purchase.user.email }}
                                        </div>
                                    </td>
                                    <td>
                                        {% if purchase.supplier %}
                                        <strong>{{ purchase.supplier.name }}</strong>
                                        <div class=\"small text-muted\">{{ purchase.supplier.email }}</div>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\">
                                        {{ purchase.confirmedAt|date('d/m/Y H:i') }}
                                    </td>
                                    <td class=\"text-center\">
                                        <span class=\"badge bg-info\">
                                            {{ purchase.purchaseItems|length }} produit(s)
                                        </span>
                                    </td>
                                    <td class=\"text-end\">
                                        <strong>{{ purchase.totalAmount|format_currency('EUR') }}</strong>
                                    </td>
                                    <td class=\"text-center\">
                                        <a href=\"{{ path('admin_purchase_show', {'id': purchase.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-info\">
                                            <i class=\"fas fa-eye\"></i> Voir le détail
                                        </a>
                                    </td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-4\">
                                        <i class=\"fas fa-check-circle fa-3x text-success mb-3\"></i>
                                        <h5 class=\"text-success\">Aucune commande en attente</h5>
                                        <p class=\"text-muted\">Toutes les commandes ont été réceptionnées</p>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchPurchaseNumber');
    const searchBtn = document.getElementById('searchPurchaseBtn');
    
    // Scanner ou recherche rapide
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            searchPurchase();
        }
    });
    
    searchBtn.addEventListener('click', searchPurchase);
    
    function searchPurchase() {
        const purchaseNumber = searchInput.value.trim().toUpperCase();
        
        if (!purchaseNumber) {
            return;
        }
        
        // Trouver la commande correspondante
        const rows = document.querySelectorAll('tbody tr');
        let found = false;
        
        rows.forEach(row => {
            const rowNumber = row.querySelector('strong').textContent;
            if (rowNumber.includes(purchaseNumber)) {
                row.scrollIntoView({ behavior: 'smooth', block: 'center' });
                row.classList.add('table-success');
                setTimeout(() => row.classList.remove('table-success'), 2000);
                found = true;
            }
        });
        
        if (!found) {
            alert('Commande non trouvée : ' + purchaseNumber);
        }
        
        searchInput.value = '';
        searchInput.focus();
    }
    
    // Focus automatique
    searchInput.focus();
});
</script>
{% endblock %}

\t", "admin/purchase/waiting_receipt.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\waiting_receipt.html.twig");
    }
}
