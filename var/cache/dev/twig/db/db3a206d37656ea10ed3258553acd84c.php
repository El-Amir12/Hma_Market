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

/* supplier_credit_note/new.html.twig */
class __TwigTemplate_5b0a19c7aaadbc4242325f4a4da9ffc7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/new.html.twig"));

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

        yield "Nouvel avoir fournisseur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-file-invoice-dollar me-2 text-primary\"></i>
                Nouvel avoir fournisseur
            </h1>
            <p class=\"text-muted mt-1\">Signaler un problème sur un lot reçu</p>
        </div>
        <div>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Informations du lot -->
    <div class=\"card shadow-sm mb-4 border-info\">
        <div class=\"card-header bg-info text-white\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-boxes me-2\"></i>
                Informations du lot concerné
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">N° lot</small>
                    <div class=\"fw-bold\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 36, $this->source); })()), "batchNumber", [], "any", false, false, false, 36), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Produit</small>
                    <div class=\"fw-bold\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 40, $this->source); })()), "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Quantité actuelle</small>
                    <div class=\"fw-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 44, $this->source); })()), "currentQuantity", [], "any", false, false, false, 44), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "product", [], "any", false, true, false, 44), "unit", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 44, $this->source); })()), "product", [], "any", false, false, false, 44), "unit", [], "any", false, false, false, 44), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Prix unitaire</small>
                    <div class=\"fw-bold text-primary\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 48, $this->source); })()), "unitPrice", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 48, $this->source); })()), "hmaService", [], "any", false, false, false, 48)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informations de la commande -->
    <div class=\"card shadow-sm mb-4 border-secondary\">
        <div class=\"card-header bg-secondary text-white\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-shopping-cart me-2\"></i>
                Informations de la commande
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">N° commande</small>
                    <div class=\"fw-bold\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 66, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 66), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Fournisseur</small>
                    <div class=\"fw-bold\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Date commande</small>
                    <div class=\"fw-bold\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 74, $this->source); })()), "createdAt", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Total commande</small>
                    <div class=\"fw-bold text-success\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 78, $this->source); })()), "totalAmount", [], "any", false, false, false, 78), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 78, $this->source); })()), "hmaService", [], "any", false, false, false, 78)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    ";
        // line 85
        yield from $this->load("supplier_credit_note/_form.html.twig", 85)->unwrap()->yield($context);
        // line 86
        yield "
    <!-- 🔥 Documentation utilisateur -->
    <div class=\"alert alert-info mt-4\">
        <h5 class=\"alert-heading\">
            <i class=\"fas fa-info-circle me-2\"></i> Informations importantes
        </h5>
        <hr>
        
        <p class=\"mb-2\"><strong>📦 Quantité concernée :</strong></p>
        <ul class=\"mb-3\">
            <li>Indiquez le nombre d'unités affectées par le problème (ex: 20 produits abîmés)</li>
            <li>Cette information sera utilisée pour le suivi et la communication avec le fournisseur</li>
            <li>Laissez vide si le problème ne concerne pas une quantité spécifique (ex: problème de qualité générale)</li>
        </ul>
        
        <p class=\"mb-2\"><strong>🔄 Impact recommandé sur le stock :</strong></p>
        <ul class=\"mb-3\">
            <li><span class=\"badge bg-secondary\">📌 Aucune action</span> - L'avoir est seulement financier, le stock reste inchangé</li>
            <li><span class=\"badge bg-warning text-dark\">⚠️ Réduire le stock</span> - Recommandé pour les produits défectueux ou quantité manquante</li>
            <li><span class=\"badge bg-danger\">🗑️ Mettre à zéro</span> - Recommandé pour les produits inutilisables (périmés, détruits)</li>
            <li><span class=\"badge bg-info\">📦 Retour fournisseur</span> - Recommandé quand les produits doivent être retournés</li>
        </ul>
        
        <div class=\"alert alert-warning mb-0\">
            <i class=\"fas fa-exclamation-triangle me-2\"></i>
            <strong>⚠️ Ajustement manuel du stock :</strong><br>
            Le système n'ajuste PAS automatiquement votre stock. Après résolution de l'avoir, 
            vous devez manuellement ajuster les quantités dans la gestion des lots si nécessaire.
            L'action sélectionnée ci-dessus sera enregistrée dans l'historique comme recommandation.
        </div>
        
        <hr>
        <p class=\"mb-0 text-muted small\">
            <i class=\"fas fa-question-circle me-1\"></i>
            Besoin d'aide ? Contactez le support ou consultez la documentation.
        </p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

        // line 127
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calcul automatique du montant à partir de la quantité
    const quantityInput = document.querySelector('input[name=\"supplier_credit_note[affected_quantity]\"]');
    const amountInput = document.querySelector('input[name=\"supplier_credit_note[declaredAmount]\"]');
    const unitPrice = ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 133, $this->source); })()), "unitPrice", [], "any", false, false, false, 133), "html", null, true);
        yield ";
    
    if (quantityInput && amountInput) {
        quantityInput.addEventListener('change', function() {
            const quantity = parseInt(this.value);
            if (quantity && quantity > 0 && (!amountInput.value || amountInput.value == 0)) {
                const calculatedAmount = quantity * unitPrice;
                amountInput.value = calculatedAmount;
            }
        });
    }

    // Aperçu des images avant upload
    const attachmentsInput = document.querySelector('input[type=\"file\"]');
    if (attachmentsInput) {
        attachmentsInput.addEventListener('change', function() {
            const previewContainer = document.createElement('div');
            previewContainer.className = 'mt-3 d-flex flex-wrap gap-2';
            
            for (let i = 0; i < this.files.length; i++) {
                const file = this.files[i];
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '100px';
                        img.style.height = '100px';
                        img.style.objectFit = 'cover';
                        img.className = 'rounded border';
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                } else if (file.type.startsWith('video/')) {
                    const video = document.createElement('video');
                    video.style.width = '100px';
                    video.style.height = '100px';
                    video.style.objectFit = 'cover';
                    video.className = 'rounded border bg-dark';
                    previewContainer.appendChild(video);
                }
            }
            
            const existingPreview = this.parentElement.querySelector('.preview-container');
            if (existingPreview) existingPreview.remove();
            
            previewContainer.classList.add('preview-container');
            this.parentElement.appendChild(previewContainer);
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
        return "supplier_credit_note/new.html.twig";
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
        return array (  283 => 133,  274 => 127,  261 => 126,  212 => 86,  210 => 85,  200 => 78,  193 => 74,  186 => 70,  179 => 66,  158 => 48,  149 => 44,  142 => 40,  135 => 36,  114 => 18,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/supplier_credit_note/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Nouvel avoir fournisseur{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-file-invoice-dollar me-2 text-primary\"></i>
                Nouvel avoir fournisseur
            </h1>
            <p class=\"text-muted mt-1\">Signaler un problème sur un lot reçu</p>
        </div>
        <div>
            <a href=\"{{ path('app_supplier_credit_note_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Informations du lot -->
    <div class=\"card shadow-sm mb-4 border-info\">
        <div class=\"card-header bg-info text-white\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-boxes me-2\"></i>
                Informations du lot concerné
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">N° lot</small>
                    <div class=\"fw-bold\">{{ stockBatch.batchNumber }}</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Produit</small>
                    <div class=\"fw-bold\">{{ stockBatch.product.name }}</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Quantité actuelle</small>
                    <div class=\"fw-bold\">{{ stockBatch.currentQuantity }} {{ stockBatch.product.unit|default('pièce(s)') }}</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Prix unitaire</small>
                    <div class=\"fw-bold text-primary\">{{ stockBatch.unitPrice|price_with_currency(stockBatch.hmaService) }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informations de la commande -->
    <div class=\"card shadow-sm mb-4 border-secondary\">
        <div class=\"card-header bg-secondary text-white\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-shopping-cart me-2\"></i>
                Informations de la commande
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
                    <div class=\"fw-bold\">{{ supplier.name }}</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Date commande</small>
                    <div class=\"fw-bold\">{{ purchase.createdAt|date('d/m/Y') }}</div>
                </div>
                <div class=\"col-md-3\">
                    <small class=\"text-muted\">Total commande</small>
                    <div class=\"fw-bold text-success\">{{ purchase.totalAmount|price_with_currency(purchase.hmaService) }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    {% include 'supplier_credit_note/_form.html.twig' %}

    <!-- 🔥 Documentation utilisateur -->
    <div class=\"alert alert-info mt-4\">
        <h5 class=\"alert-heading\">
            <i class=\"fas fa-info-circle me-2\"></i> Informations importantes
        </h5>
        <hr>
        
        <p class=\"mb-2\"><strong>📦 Quantité concernée :</strong></p>
        <ul class=\"mb-3\">
            <li>Indiquez le nombre d'unités affectées par le problème (ex: 20 produits abîmés)</li>
            <li>Cette information sera utilisée pour le suivi et la communication avec le fournisseur</li>
            <li>Laissez vide si le problème ne concerne pas une quantité spécifique (ex: problème de qualité générale)</li>
        </ul>
        
        <p class=\"mb-2\"><strong>🔄 Impact recommandé sur le stock :</strong></p>
        <ul class=\"mb-3\">
            <li><span class=\"badge bg-secondary\">📌 Aucune action</span> - L'avoir est seulement financier, le stock reste inchangé</li>
            <li><span class=\"badge bg-warning text-dark\">⚠️ Réduire le stock</span> - Recommandé pour les produits défectueux ou quantité manquante</li>
            <li><span class=\"badge bg-danger\">🗑️ Mettre à zéro</span> - Recommandé pour les produits inutilisables (périmés, détruits)</li>
            <li><span class=\"badge bg-info\">📦 Retour fournisseur</span> - Recommandé quand les produits doivent être retournés</li>
        </ul>
        
        <div class=\"alert alert-warning mb-0\">
            <i class=\"fas fa-exclamation-triangle me-2\"></i>
            <strong>⚠️ Ajustement manuel du stock :</strong><br>
            Le système n'ajuste PAS automatiquement votre stock. Après résolution de l'avoir, 
            vous devez manuellement ajuster les quantités dans la gestion des lots si nécessaire.
            L'action sélectionnée ci-dessus sera enregistrée dans l'historique comme recommandation.
        </div>
        
        <hr>
        <p class=\"mb-0 text-muted small\">
            <i class=\"fas fa-question-circle me-1\"></i>
            Besoin d'aide ? Contactez le support ou consultez la documentation.
        </p>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calcul automatique du montant à partir de la quantité
    const quantityInput = document.querySelector('input[name=\"supplier_credit_note[affected_quantity]\"]');
    const amountInput = document.querySelector('input[name=\"supplier_credit_note[declaredAmount]\"]');
    const unitPrice = {{ stockBatch.unitPrice }};
    
    if (quantityInput && amountInput) {
        quantityInput.addEventListener('change', function() {
            const quantity = parseInt(this.value);
            if (quantity && quantity > 0 && (!amountInput.value || amountInput.value == 0)) {
                const calculatedAmount = quantity * unitPrice;
                amountInput.value = calculatedAmount;
            }
        });
    }

    // Aperçu des images avant upload
    const attachmentsInput = document.querySelector('input[type=\"file\"]');
    if (attachmentsInput) {
        attachmentsInput.addEventListener('change', function() {
            const previewContainer = document.createElement('div');
            previewContainer.className = 'mt-3 d-flex flex-wrap gap-2';
            
            for (let i = 0; i < this.files.length; i++) {
                const file = this.files[i];
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '100px';
                        img.style.height = '100px';
                        img.style.objectFit = 'cover';
                        img.className = 'rounded border';
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                } else if (file.type.startsWith('video/')) {
                    const video = document.createElement('video');
                    video.style.width = '100px';
                    video.style.height = '100px';
                    video.style.objectFit = 'cover';
                    video.className = 'rounded border bg-dark';
                    previewContainer.appendChild(video);
                }
            }
            
            const existingPreview = this.parentElement.querySelector('.preview-container');
            if (existingPreview) existingPreview.remove();
            
            previewContainer.classList.add('preview-container');
            this.parentElement.appendChild(previewContainer);
        });
    }
});
</script>
{% endblock %}", "supplier_credit_note/new.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\new.html.twig");
    }
}
