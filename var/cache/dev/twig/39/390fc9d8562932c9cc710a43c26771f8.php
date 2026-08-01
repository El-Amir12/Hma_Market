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

/* admin/stock_batch/_form.html.twig */
class __TwigTemplate_c8ece1664daff5db276bd783b0ffa9a7 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["isEdit"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)));
        // line 4
        $context["hasSales"] = (array_key_exists("hasSales", $context) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 4, $this->source); })()));
        // line 5
        $context["isPerishable"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 5);
        // line 6
        $context["hasExpiryField"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "expiry_date", [], "any", true, true, false, 6);
        // line 7
        yield "
";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

<div class=\"row g-4\">
    <!-- Carte Informations du lot -->
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>
                    ";
        // line 17
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                        Modifier le lot
                    ";
        } else {
            // line 20
            yield "                        Nouveau lot
                    ";
        }
        // line 22
        yield "                </h5>
            </div>
            <div class=\"card-body\">
                ";
        // line 25
        if ((($tmp = (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                    <div class=\"alert alert-warning mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-exclamation-triangle fa-2x me-3\"></i>
                            <div>
                                <strong>Attention :</strong> Ce lot a déjà des ventes associées.<br>
                                <small>Seuls l'emplacement, la date d'expiration (si périssable) et le statut peuvent être modifiés.</small>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 36
        yield "
                <!-- Message pour produit non périssable -->
                ";
        // line 38
        if ((($tmp =  !(isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                    <div class=\"alert alert-info mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-infinity fa-2x me-3\"></i>
                            <div>
                                <strong>Produit non périssable :</strong><br>
                                <small>Ce produit n'a pas de date d'expiration. Seul l'emplacement et le statut peuvent être modifiés.</small>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 49
        yield "
                <!-- Numéro de lot (affichage simple) -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 55, $this->source); })()), "batchNumber", [], "any", false, false, false, 55), "html", null, true);
        yield "\" 
                                readonly disabled>
                            <label>
                                <i class=\"fas fa-hashtag me-1\"></i> Numéro de lot
                            </label>
                            <small class=\"text-muted\">
                                <i class=\"fas fa-lock me-1\"></i> Le numéro de lot ne peut pas être modifié
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Emplacement avec Select2 -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "locationEntity", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control location-select", "placeholder" => " ", "style" => "width: 100%"]]);
        // line 75
        yield "
                            <label for=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "locationEntity", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
        yield "\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacement
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Sélectionnez l'emplacement physique du lot
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "locationEntity", [], "any", false, false, false, 84), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations en lecture seule (quantités et prix) -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                   value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 95, $this->source); })()), "initialQuantity", [], "any", false, false, false, 95), "html", null, true);
        yield "\" 
                                   readonly disabled>
                            <label>Quantité initiale</label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                   value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 103, $this->source); })()), "currentQuantity", [], "any", false, false, false, 103), "html", null, true);
        yield "\" 
                                   readonly disabled>
                            <label>Quantité actuelle</label>
                        </div>
                    </div>
                </div>

                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                   value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 114, $this->source); })()), "unitPrice", [], "any", false, false, false, 114), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 114, $this->source); })()), "hmaService", [], "any", false, false, false, 114)), "html", null, true);
        yield "\" 
                                   readonly disabled>
                            <label>Prix unitaire</label>
                        </div>
                    </div>
                </div>

                <!-- Dates pour produit périssable uniquement -->
                ";
        // line 122
        if ((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "                    <!-- Date de fabrication (uniquement en création ou si modifiable) -->
                    ";
            // line 124
            if (( !(isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 124, $this->source); })()) || ((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 124, $this->source); })()) &&  !(isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 124, $this->source); })())))) {
                // line 125
                yield "                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                <input type=\"date\" 
                                       name=\"manufacturing_date\" 
                                       id=\"manufacturing_date\"
                                       class=\"form-control ";
                // line 131
                if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 131, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 131, $this->source); })()))) {
                    yield "bg-light";
                }
                yield "\"
                                       value=\"";
                // line 132
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 132, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 132, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 132), "Y-m-d"), "html", null, true)) : (""));
                yield "\"
                                       ";
                // line 133
                if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 133, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 133, $this->source); })()))) {
                    yield "readonly disabled";
                }
                yield ">
                                <label for=\"manufacturing_date\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de fabrication
                                </label>
                                ";
                // line 137
                if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 137, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 137, $this->source); })()))) {
                    // line 138
                    yield "                                <small class=\"text-muted\">
                                    <i class=\"fas fa-lock me-1\"></i> Non modifiable (ventes associées)
                                </small>
                                ";
                }
                // line 142
                yield "                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
                // line 146
                if ((($tmp = (isset($context["hasExpiryField"]) || array_key_exists("hasExpiryField", $context) ? $context["hasExpiryField"] : (function () { throw new RuntimeError('Variable "hasExpiryField" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 147
                    yield "                                    ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "expiry_date", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control expiry-date-input", "placeholder" => " ", "disabled" => (((                    // line 150
(isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 150, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 150, $this->source); })()))) ? (true) : (false)), "readonly" => (((                    // line 151
(isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 151, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 151, $this->source); })()))) ? (true) : (false))]]);
                    // line 152
                    yield "
                                    <label for=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "expiry_date", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
                    yield "\">
                                        <i class=\"fas fa-hourglass-end me-1\"></i> Date d'expiration
                                    </label>
                                    ";
                    // line 156
                    if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 156, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 156, $this->source); })()))) {
                        // line 157
                        yield "                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-lock me-1\"></i> Non modifiable (ventes associées)
                                    </small>
                                    ";
                    } else {
                        // line 161
                        yield "                                    <div class=\"form-text\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        La date d'expiration doit être postérieure à la date de fabrication
                                    </div>
                                    ";
                    }
                    // line 166
                    yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
                    // line 167
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "expiry_date", [], "any", false, false, false, 167), 'errors');
                    yield "
                                    </div>
                                ";
                } else {
                    // line 170
                    yield "                                    <input type=\"date\" 
                                           name=\"expiry_date\"
                                           id=\"expiry_date\"
                                           class=\"form-control expiry-date-input\"
                                           value=\"";
                    // line 174
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 174, $this->source); })()), "expiryDate", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 174, $this->source); })()), "expiryDate", [], "any", false, false, false, 174), "Y-m-d"), "html", null, true)) : (""));
                    yield "\"
                                           ";
                    // line 175
                    if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 175, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 175, $this->source); })()))) {
                        yield "disabled readonly";
                    }
                    yield ">
                                    <label for=\"expiry_date\">
                                        <i class=\"fas fa-hourglass-end me-1\"></i> Date d'expiration
                                    </label>
                                    ";
                    // line 179
                    if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 179, $this->source); })()) && (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 179, $this->source); })()))) {
                        // line 180
                        yield "                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-lock me-1\"></i> Non modifiable (ventes associées)
                                    </small>
                                    ";
                    } else {
                        // line 184
                        yield "                                    <div class=\"form-text\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        La date d'expiration doit être postérieure à la date de fabrication
                                    </div>
                                    ";
                    }
                    // line 189
                    yield "                                ";
                }
                // line 190
                yield "                            </div>
                        </div>
                    </div>

                    <!-- Alertes expiration -->
                    <div id=\"expiry-warning\" class=\"alert alert-warning mt-3\" style=\"display: none;\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention :</strong> Ce lot expire bientôt !
                    </div>
                    <div id=\"expiry-expired\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                        <i class=\"fas fa-skull-crossbones me-2\"></i>
                        <strong>Expiré :</strong> Ce lot est déjà expiré !
                    </div>
                    <div id=\"date-error\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                        <i class=\"fas fa-calendar-times me-2\"></i>
                        <strong>Erreur de date :</strong> La date d'expiration doit être postérieure à la date de fabrication.
                    </div>
                    ";
            } else {
                // line 208
                yield "                        <!-- Affichage des dates en lecture seule si ventes associées -->
                        <div class=\"row g-3 mt-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light\" 
                                           value=\"";
                // line 213
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 213, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 213, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 213), "d/m/Y"), "html", null, true)) : ("—"));
                yield "\" 
                                           readonly disabled>
                                    <label>Date de fabrication</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light\" 
                                           value=\"";
                // line 221
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 221, $this->source); })()), "expiryDate", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 221, $this->source); })()), "expiryDate", [], "any", false, false, false, 221), "d/m/Y"), "html", null, true)) : ("—"));
                yield "\" 
                                           readonly disabled>
                                    <label>Date d'expiration</label>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 228
            yield "                ";
        } else {
            // line 229
            yield "                    <!-- Produit non périssable : message informatif -->
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"card border-0 bg-info bg-opacity-10\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-infinity fa-2x text-info mb-2 d-block\"></i>
                                    <p class=\"mb-0 text-info\">
                                        <strong>Produit non périssable</strong><br>
                                        <small>Aucune date d'expiration à gérer pour ce produit.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 244
        yield "
                <!-- Statut actif -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut du lot</span>
                                    </div>
                                    <span class=\"badge ";
        // line 255
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "is_active", [], "any", false, false, false, 255), "vars", [], "any", false, false, false, 255), "data", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\" id=\"status-badge\">
                                        ";
        // line 256
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "is_active", [], "any", false, false, false, 256), "vars", [], "any", false, false, false, 256), "data", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    ";
        // line 260
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "is_active", [], "any", false, false, false, 260), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch", "onchange" => "updateStatusBadge()"]]);
        // line 264
        yield "
                                    <label class=\"form-check-label\" for=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "is_active", [], "any", false, false, false, 265), "vars", [], "any", false, false, false, 265), "id", [], "any", false, false, false, 265), "html", null, true);
        yield "\" id=\"status-label\">
                                        ";
        // line 266
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "is_active", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "data", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Lot actif (disponible à la vente)") : ("Lot inactif (indisponible)"));
        yield "
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Désactiver un lot le rend indisponible à la vente sans supprimer l'historique
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "is_active", [], "any", false, false, false, 274), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations système -->
                ";
        // line 282
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 282, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 283
            yield "                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-secondary bg-opacity-25\">
                            <div class=\"card-body\">
                                <h6 class=\"card-subtitle mb-2 text-white\">
                                    <i class=\"fas fa-history me-1\"></i> Informations système
                                </h6>
                                <div class=\"small\">
                                    <div class=\"d-flex justify-content-between mb-1\">
                                        <span class=\"text-white-50\">Créé le :</span>
                                        <span class=\"text-white\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 293, $this->source); })()), "createdAt", [], "any", false, false, false, 293), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                    </div>
                                    ";
            // line 295
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 295, $this->source); })()), "updatedAt", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 296
                yield "                                    <div class=\"d-flex justify-content-between\">
                                        <span class=\"text-white-50\">Modifié le :</span>
                                        <span class=\"text-white\">";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 298, $this->source); })()), "updatedAt", [], "any", false, false, false, 298), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                    </div>
                                    ";
            }
            // line 301
            yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 307
        yield "            </div>

            <!-- Footer -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\" id=\"submit-btn\">
                            <i class=\"fas fa-save me-2\"></i> 
                            ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 319, $this->source); })()), (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 319, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer le lot")))) : ((((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 319, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Créer le lot")))), "html", null, true);
        yield "
                        </button>
                        
                        ";
        // line 322
        if ((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 322, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 323, $this->source); })()), "id", [], "any", false, false, false, 323)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        ";
        }
        // line 327
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 334
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), 'form_end');
        yield "

";
        // line 336
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 491
        yield "
<!-- CSS additionnel -->
<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.btn-info:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(23, 162, 184, 0.4);
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
/* Style Select2 */
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 10px !important;
    min-height: calc(3.5rem + 2px);
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: calc(3.5rem + 2px);
    padding-left: 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: calc(3.5rem + 2px);
}
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #667eea;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #667eea;
    color: white;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        border-radius: 8px !important;
        margin-bottom: 5px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 38px;
        padding-left: 12px;
    }
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 336
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

        // line 337
        yield "<!-- Select2 CSS et JS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 POUR L'EMPLACEMENT ==========
    const locationSelect = document.querySelector('.location-select');
    if (locationSelect && typeof \$ !== 'undefined') {
        \$(locationSelect).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Sélectionner un emplacement --',
            allowClear: true,
            width: '100%'
        });
    }
    
    // ========== VARIABLES ==========
    const isPerishable = ";
        // line 358
        yield (((($tmp = (isset($context["isPerishable"]) || array_key_exists("isPerishable", $context) ? $context["isPerishable"] : (function () { throw new RuntimeError('Variable "isPerishable" does not exist.', 358, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    const hasSales = ";
        // line 359
        yield (((($tmp = (isset($context["hasSales"]) || array_key_exists("hasSales", $context) ? $context["hasSales"] : (function () { throw new RuntimeError('Variable "hasSales" does not exist.', 359, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    const isEdit = ";
        // line 360
        yield (((($tmp = (isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 360, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    const hasExpiryField = ";
        // line 361
        yield (((($tmp = (isset($context["hasExpiryField"]) || array_key_exists("hasExpiryField", $context) ? $context["hasExpiryField"] : (function () { throw new RuntimeError('Variable "hasExpiryField" does not exist.', 361, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    
    // ========== RÉFÉRENCES DES CHAMPS ==========
    const manufacturingDateInput = document.getElementById('manufacturing_date');
    // Récupérer le champ date d'expiration de manière sécurisée
    let expiryDateInput = null;
    if (hasExpiryField && document.getElementById('";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "expiry_date", [], "any", false, true, false, 367), "vars", [], "any", false, true, false, 367), "id", [], "any", true, true, false, 367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "expiry_date", [], "any", false, false, false, 367), "vars", [], "any", false, false, false, 367), "id", [], "any", false, false, false, 367), "expiry_date")) : ("expiry_date")), "html", null, true);
        yield "')) {
        expiryDateInput = document.getElementById('";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "expiry_date", [], "any", false, true, false, 368), "vars", [], "any", false, true, false, 368), "id", [], "any", true, true, false, 368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "expiry_date", [], "any", false, false, false, 368), "vars", [], "any", false, false, false, 368), "id", [], "any", false, false, false, 368), "expiry_date")) : ("expiry_date")), "html", null, true);
        yield "');
    } else {
        expiryDateInput = document.getElementById('expiry_date');
    }
    
    // ========== VALIDATION DES DATES (produit périssable uniquement) ==========
    if (isPerishable && !(isEdit && hasSales)) {
        const dateErrorDiv = document.getElementById('date-error');
        const submitBtn = document.getElementById('submit-btn');
        const expiryWarning = document.getElementById('expiry-warning');
        const expiryExpired = document.getElementById('expiry-expired');
        
        function validateDates() {
            if (manufacturingDateInput && expiryDateInput && expiryDateInput.value) {
                const manufacturingDate = manufacturingDateInput.value ? new Date(manufacturingDateInput.value) : null;
                const expiryDate = new Date(expiryDateInput.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                
                // Vérifier que la date d'expiration est postérieure à la date de fabrication
                if (manufacturingDate && expiryDate <= manufacturingDate) {
                    if (dateErrorDiv) dateErrorDiv.style.display = 'block';
                    if (submitBtn) submitBtn.disabled = true;
                    return false;
                }
                
                // Vérifier que la date d'expiration n'est pas dans le passé (pour les nouveaux lots)
                if (!isEdit && expiryDate <= today) {
                    if (dateErrorDiv) {
                        dateErrorDiv.innerHTML = '<i class=\"fas fa-calendar-times me-2\"></i><strong>Erreur de date :</strong> La date d\\'expiration ne peut pas être dans le passé.';
                        dateErrorDiv.style.display = 'block';
                    }
                    if (submitBtn) submitBtn.disabled = true;
                    return false;
                }
                
                if (dateErrorDiv) dateErrorDiv.style.display = 'none';
                if (submitBtn) submitBtn.disabled = false;
                return true;
            }
            return true;
        }
        
        function checkExpiryDate() {
            if (expiryDateInput && expiryDateInput.value) {
                const expiryDate = new Date(expiryDateInput.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                const thirtyDaysFromNow = new Date();
                thirtyDaysFromNow.setDate(today.getDate() + 30);
                
                if (expiryWarning) expiryWarning.style.display = 'none';
                if (expiryExpired) expiryExpired.style.display = 'none';
                
                if (expiryDate < today) {
                    if (expiryExpired) expiryExpired.style.display = 'block';
                    const activeSwitch = document.getElementById('";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "is_active", [], "any", false, false, false, 424), "vars", [], "any", false, false, false, 424), "id", [], "any", false, false, false, 424), "html", null, true);
        yield "');
                    if (activeSwitch && activeSwitch.checked) {
                        activeSwitch.checked = false;
                        updateStatusBadge();
                    }
                    if (submitBtn && isEdit) submitBtn.disabled = true;
                } else if (expiryDate < thirtyDaysFromNow) {
                    if (expiryWarning) expiryWarning.style.display = 'block';
                    if (submitBtn && isEdit) submitBtn.disabled = false;
                } else {
                    if (submitBtn && isEdit) submitBtn.disabled = false;
                }
            } else {
                if (expiryWarning) expiryWarning.style.display = 'none';
                if (expiryExpired) expiryExpired.style.display = 'none';
            }
            validateDates();
        }
        
        if (manufacturingDateInput) {
            manufacturingDateInput.addEventListener('change', validateDates);
        }
        if (expiryDateInput) {
            expiryDateInput.addEventListener('change', function() {
                validateDates();
                checkExpiryDate();
            });
            checkExpiryDate();
        }
    }
    
    // ========== MISE À JOUR STATUT ==========
    function updateStatusBadge() {
        const activeSwitch = document.getElementById('";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "is_active", [], "any", false, false, false, 457), "vars", [], "any", false, false, false, 457), "id", [], "any", false, false, false, 457), "html", null, true);
        yield "');
        const statusBadge = document.getElementById('status-badge');
        const statusLabel = document.getElementById('status-label');
        
        if (activeSwitch && statusBadge && statusLabel) {
            const isActive = activeSwitch.checked;
            if (isActive) {
                statusBadge.className = 'badge bg-success';
                statusBadge.textContent = 'ACTIF';
                statusLabel.textContent = 'Lot actif (disponible à la vente)';
            } else {
                statusBadge.className = 'badge bg-danger';
                statusBadge.textContent = 'INACTIF';
                statusLabel.textContent = 'Lot inactif (indisponible)';
            }
        }
    }
    
    updateStatusBadge();
    
    // ========== VALIDATION BOOTSTRAP ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
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
        return "admin/stock_batch/_form.html.twig";
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
        return array (  826 => 457,  790 => 424,  731 => 368,  727 => 367,  718 => 361,  714 => 360,  710 => 359,  706 => 358,  683 => 337,  670 => 336,  551 => 491,  549 => 336,  544 => 334,  535 => 327,  527 => 323,  525 => 322,  519 => 319,  509 => 312,  502 => 307,  494 => 301,  488 => 298,  484 => 296,  482 => 295,  477 => 293,  465 => 283,  463 => 282,  452 => 274,  441 => 266,  437 => 265,  434 => 264,  432 => 260,  425 => 256,  421 => 255,  408 => 244,  391 => 229,  388 => 228,  378 => 221,  367 => 213,  360 => 208,  340 => 190,  337 => 189,  330 => 184,  324 => 180,  322 => 179,  313 => 175,  309 => 174,  303 => 170,  297 => 167,  294 => 166,  287 => 161,  281 => 157,  279 => 156,  273 => 153,  270 => 152,  268 => 151,  267 => 150,  265 => 147,  263 => 146,  257 => 142,  251 => 138,  249 => 137,  240 => 133,  236 => 132,  230 => 131,  222 => 125,  220 => 124,  217 => 123,  215 => 122,  204 => 114,  190 => 103,  179 => 95,  165 => 84,  154 => 76,  151 => 75,  149 => 71,  130 => 55,  122 => 49,  110 => 39,  108 => 38,  104 => 36,  92 => 26,  90 => 25,  85 => 22,  81 => 20,  77 => 18,  75 => 17,  63 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/_form.html.twig #}

{% set isEdit = batch.id is defined and batch.id is not null %}
{% set hasSales = hasSales is defined and hasSales %}
{% set isPerishable = product.hasExpiryDate %}
{% set hasExpiryField = form.expiry_date is defined %}

{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

<div class=\"row g-4\">
    <!-- Carte Informations du lot -->
    <div class=\"col-lg-12\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-3\">
                <h5 class=\"card-title mb-0\">
                    <i class=\"fas fa-boxes me-2\"></i>
                    {% if isEdit %}
                        Modifier le lot
                    {% else %}
                        Nouveau lot
                    {% endif %}
                </h5>
            </div>
            <div class=\"card-body\">
                {% if hasSales %}
                    <div class=\"alert alert-warning mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-exclamation-triangle fa-2x me-3\"></i>
                            <div>
                                <strong>Attention :</strong> Ce lot a déjà des ventes associées.<br>
                                <small>Seuls l'emplacement, la date d'expiration (si périssable) et le statut peuvent être modifiés.</small>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- Message pour produit non périssable -->
                {% if not isPerishable %}
                    <div class=\"alert alert-info mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-infinity fa-2x me-3\"></i>
                            <div>
                                <strong>Produit non périssable :</strong><br>
                                <small>Ce produit n'a pas de date d'expiration. Seul l'emplacement et le statut peuvent être modifiés.</small>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- Numéro de lot (affichage simple) -->
                <div class=\"row g-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                value=\"{{ batch.batchNumber }}\" 
                                readonly disabled>
                            <label>
                                <i class=\"fas fa-hashtag me-1\"></i> Numéro de lot
                            </label>
                            <small class=\"text-muted\">
                                <i class=\"fas fa-lock me-1\"></i> Le numéro de lot ne peut pas être modifié
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Emplacement avec Select2 -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            {{ form_widget(form.locationEntity, {'attr': {
                                'class': 'form-control location-select',
                                'placeholder': ' ',
                                'style': 'width: 100%'
                            }}) }}
                            <label for=\"{{ form.locationEntity.vars.id }}\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacement
                            </label>
                            <div class=\"form-text\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Sélectionnez l'emplacement physique du lot
                            </div>
                            <div class=\"invalid-feedback d-block\">
                                {{ form_errors(form.locationEntity) }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations en lecture seule (quantités et prix) -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                   value=\"{{ batch.initialQuantity }}\" 
                                   readonly disabled>
                            <label>Quantité initiale</label>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                   value=\"{{ batch.currentQuantity }}\" 
                                   readonly disabled>
                            <label>Quantité actuelle</label>
                        </div>
                    </div>
                </div>

                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"form-floating\">
                            <input type=\"text\" class=\"form-control bg-light\" 
                                   value=\"{{ batch.unitPrice|price_with_currency(batch.hmaService) }}\" 
                                   readonly disabled>
                            <label>Prix unitaire</label>
                        </div>
                    </div>
                </div>

                <!-- Dates pour produit périssable uniquement -->
                {% if isPerishable %}
                    <!-- Date de fabrication (uniquement en création ou si modifiable) -->
                    {% if not isEdit or (isEdit and not hasSales) %}
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                <input type=\"date\" 
                                       name=\"manufacturing_date\" 
                                       id=\"manufacturing_date\"
                                       class=\"form-control {% if isEdit and hasSales %}bg-light{% endif %}\"
                                       value=\"{{ batch.manufacturingDate ? batch.manufacturingDate|date('Y-m-d') : '' }}\"
                                       {% if isEdit and hasSales %}readonly disabled{% endif %}>
                                <label for=\"manufacturing_date\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i> Date de fabrication
                                </label>
                                {% if isEdit and hasSales %}
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-lock me-1\"></i> Non modifiable (ventes associées)
                                </small>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {% if hasExpiryField %}
                                    {{ form_widget(form.expiry_date, {'attr': {
                                        'class': 'form-control expiry-date-input',
                                        'placeholder': ' ',
                                        'disabled': isEdit and hasSales ? true : false,
                                        'readonly': isEdit and hasSales ? true : false
                                    }}) }}
                                    <label for=\"{{ form.expiry_date.vars.id }}\">
                                        <i class=\"fas fa-hourglass-end me-1\"></i> Date d'expiration
                                    </label>
                                    {% if isEdit and hasSales %}
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-lock me-1\"></i> Non modifiable (ventes associées)
                                    </small>
                                    {% else %}
                                    <div class=\"form-text\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        La date d'expiration doit être postérieure à la date de fabrication
                                    </div>
                                    {% endif %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.expiry_date) }}
                                    </div>
                                {% else %}
                                    <input type=\"date\" 
                                           name=\"expiry_date\"
                                           id=\"expiry_date\"
                                           class=\"form-control expiry-date-input\"
                                           value=\"{{ batch.expiryDate ? batch.expiryDate|date('Y-m-d') : '' }}\"
                                           {% if isEdit and hasSales %}disabled readonly{% endif %}>
                                    <label for=\"expiry_date\">
                                        <i class=\"fas fa-hourglass-end me-1\"></i> Date d'expiration
                                    </label>
                                    {% if isEdit and hasSales %}
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-lock me-1\"></i> Non modifiable (ventes associées)
                                    </small>
                                    {% else %}
                                    <div class=\"form-text\">
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        La date d'expiration doit être postérieure à la date de fabrication
                                    </div>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <!-- Alertes expiration -->
                    <div id=\"expiry-warning\" class=\"alert alert-warning mt-3\" style=\"display: none;\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention :</strong> Ce lot expire bientôt !
                    </div>
                    <div id=\"expiry-expired\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                        <i class=\"fas fa-skull-crossbones me-2\"></i>
                        <strong>Expiré :</strong> Ce lot est déjà expiré !
                    </div>
                    <div id=\"date-error\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                        <i class=\"fas fa-calendar-times me-2\"></i>
                        <strong>Erreur de date :</strong> La date d'expiration doit être postérieure à la date de fabrication.
                    </div>
                    {% else %}
                        <!-- Affichage des dates en lecture seule si ventes associées -->
                        <div class=\"row g-3 mt-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light\" 
                                           value=\"{{ batch.manufacturingDate ? batch.manufacturingDate|date('d/m/Y') : '—' }}\" 
                                           readonly disabled>
                                    <label>Date de fabrication</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    <input type=\"text\" class=\"form-control bg-light\" 
                                           value=\"{{ batch.expiryDate ? batch.expiryDate|date('d/m/Y') : '—' }}\" 
                                           readonly disabled>
                                    <label>Date d'expiration</label>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                {% else %}
                    <!-- Produit non périssable : message informatif -->
                    <div class=\"row g-3 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"card border-0 bg-info bg-opacity-10\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-infinity fa-2x text-info mb-2 d-block\"></i>
                                    <p class=\"mb-0 text-info\">
                                        <strong>Produit non périssable</strong><br>
                                        <small>Aucune date d'expiration à gérer pour ce produit.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- Statut actif -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-light\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-toggle-on me-2 text-primary\"></i>
                                        <span class=\"fw-bold\">Statut du lot</span>
                                    </div>
                                    <span class=\"badge {{ form.is_active.vars.data ? 'bg-success' : 'bg-danger' }}\" id=\"status-badge\">
                                        {{ form.is_active.vars.data ? 'ACTIF' : 'INACTIF' }}
                                    </span>
                                </div>
                                <div class=\"form-check form-switch\">
                                    {{ form_widget(form.is_active, {'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch',
                                        'onchange': 'updateStatusBadge()'
                                    }}) }}
                                    <label class=\"form-check-label\" for=\"{{ form.is_active.vars.id }}\" id=\"status-label\">
                                        {{ form.is_active.vars.data ? 'Lot actif (disponible à la vente)' : 'Lot inactif (indisponible)' }}
                                    </label>
                                </div>
                                <small class=\"text-muted mt-1 d-block\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Désactiver un lot le rend indisponible à la vente sans supprimer l'historique
                                </small>
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.is_active) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informations système -->
                {% if isEdit %}
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-12\">
                        <div class=\"card border-0 bg-secondary bg-opacity-25\">
                            <div class=\"card-body\">
                                <h6 class=\"card-subtitle mb-2 text-white\">
                                    <i class=\"fas fa-history me-1\"></i> Informations système
                                </h6>
                                <div class=\"small\">
                                    <div class=\"d-flex justify-content-between mb-1\">
                                        <span class=\"text-white-50\">Créé le :</span>
                                        <span class=\"text-white\">{{ batch.createdAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                    {% if batch.updatedAt %}
                                    <div class=\"d-flex justify-content-between\">
                                        <span class=\"text-white-50\">Modifié le :</span>
                                        <span class=\"text-white\">{{ batch.updatedAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            <!-- Footer -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-times me-2\"></i> Annuler
                    </a>
                    
                    <div class=\"btn-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\" id=\"submit-btn\">
                            <i class=\"fas fa-save me-2\"></i> 
                            {{ button_label|default(isEdit ? 'Mettre à jour' : 'Créer le lot') }}
                        </button>
                        
                        {% if isEdit %}
                            <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" class=\"btn btn-info btn-lg\">
                                <i class=\"fas fa-eye me-2\"></i> Voir
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ form_end(form) }}

{% block javascripts %}
<!-- Select2 CSS et JS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 POUR L'EMPLACEMENT ==========
    const locationSelect = document.querySelector('.location-select');
    if (locationSelect && typeof \$ !== 'undefined') {
        \$(locationSelect).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '-- Sélectionner un emplacement --',
            allowClear: true,
            width: '100%'
        });
    }
    
    // ========== VARIABLES ==========
    const isPerishable = {{ isPerishable ? 'true' : 'false' }};
    const hasSales = {{ hasSales ? 'true' : 'false' }};
    const isEdit = {{ isEdit ? 'true' : 'false' }};
    const hasExpiryField = {{ hasExpiryField ? 'true' : 'false' }};
    
    // ========== RÉFÉRENCES DES CHAMPS ==========
    const manufacturingDateInput = document.getElementById('manufacturing_date');
    // Récupérer le champ date d'expiration de manière sécurisée
    let expiryDateInput = null;
    if (hasExpiryField && document.getElementById('{{ form.expiry_date.vars.id|default('expiry_date') }}')) {
        expiryDateInput = document.getElementById('{{ form.expiry_date.vars.id|default('expiry_date') }}');
    } else {
        expiryDateInput = document.getElementById('expiry_date');
    }
    
    // ========== VALIDATION DES DATES (produit périssable uniquement) ==========
    if (isPerishable && !(isEdit && hasSales)) {
        const dateErrorDiv = document.getElementById('date-error');
        const submitBtn = document.getElementById('submit-btn');
        const expiryWarning = document.getElementById('expiry-warning');
        const expiryExpired = document.getElementById('expiry-expired');
        
        function validateDates() {
            if (manufacturingDateInput && expiryDateInput && expiryDateInput.value) {
                const manufacturingDate = manufacturingDateInput.value ? new Date(manufacturingDateInput.value) : null;
                const expiryDate = new Date(expiryDateInput.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                
                // Vérifier que la date d'expiration est postérieure à la date de fabrication
                if (manufacturingDate && expiryDate <= manufacturingDate) {
                    if (dateErrorDiv) dateErrorDiv.style.display = 'block';
                    if (submitBtn) submitBtn.disabled = true;
                    return false;
                }
                
                // Vérifier que la date d'expiration n'est pas dans le passé (pour les nouveaux lots)
                if (!isEdit && expiryDate <= today) {
                    if (dateErrorDiv) {
                        dateErrorDiv.innerHTML = '<i class=\"fas fa-calendar-times me-2\"></i><strong>Erreur de date :</strong> La date d\\'expiration ne peut pas être dans le passé.';
                        dateErrorDiv.style.display = 'block';
                    }
                    if (submitBtn) submitBtn.disabled = true;
                    return false;
                }
                
                if (dateErrorDiv) dateErrorDiv.style.display = 'none';
                if (submitBtn) submitBtn.disabled = false;
                return true;
            }
            return true;
        }
        
        function checkExpiryDate() {
            if (expiryDateInput && expiryDateInput.value) {
                const expiryDate = new Date(expiryDateInput.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                const thirtyDaysFromNow = new Date();
                thirtyDaysFromNow.setDate(today.getDate() + 30);
                
                if (expiryWarning) expiryWarning.style.display = 'none';
                if (expiryExpired) expiryExpired.style.display = 'none';
                
                if (expiryDate < today) {
                    if (expiryExpired) expiryExpired.style.display = 'block';
                    const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
                    if (activeSwitch && activeSwitch.checked) {
                        activeSwitch.checked = false;
                        updateStatusBadge();
                    }
                    if (submitBtn && isEdit) submitBtn.disabled = true;
                } else if (expiryDate < thirtyDaysFromNow) {
                    if (expiryWarning) expiryWarning.style.display = 'block';
                    if (submitBtn && isEdit) submitBtn.disabled = false;
                } else {
                    if (submitBtn && isEdit) submitBtn.disabled = false;
                }
            } else {
                if (expiryWarning) expiryWarning.style.display = 'none';
                if (expiryExpired) expiryExpired.style.display = 'none';
            }
            validateDates();
        }
        
        if (manufacturingDateInput) {
            manufacturingDateInput.addEventListener('change', validateDates);
        }
        if (expiryDateInput) {
            expiryDateInput.addEventListener('change', function() {
                validateDates();
                checkExpiryDate();
            });
            checkExpiryDate();
        }
    }
    
    // ========== MISE À JOUR STATUT ==========
    function updateStatusBadge() {
        const activeSwitch = document.getElementById('{{ form.is_active.vars.id }}');
        const statusBadge = document.getElementById('status-badge');
        const statusLabel = document.getElementById('status-label');
        
        if (activeSwitch && statusBadge && statusLabel) {
            const isActive = activeSwitch.checked;
            if (isActive) {
                statusBadge.className = 'badge bg-success';
                statusBadge.textContent = 'ACTIF';
                statusLabel.textContent = 'Lot actif (disponible à la vente)';
            } else {
                statusBadge.className = 'badge bg-danger';
                statusBadge.textContent = 'INACTIF';
                statusLabel.textContent = 'Lot inactif (indisponible)';
            }
        }
    }
    
    updateStatusBadge();
    
    // ========== VALIDATION BOOTSTRAP ==========
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>
{% endblock %}

<!-- CSS additionnel -->
<style>
.card-hover {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}
.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.form-floating > label {
    padding-left: 2.5rem;
}
.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
    padding: 1rem 0.75rem 0.5rem 2.5rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:not([value=\"\"]):not(:placeholder-shown) ~ label {
    transform: scale(.85) translateY(-0.9rem) translateX(0.15rem);
    color: #667eea;
}
.form-floating > .form-control,
.form-floating > .form-select {
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}
.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
    border: none;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}
.btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
}
.btn-info:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(23, 162, 184, 0.4);
}
.form-switch .form-check-input {
    width: 3.5em;
    height: 1.8em;
    cursor: pointer;
    margin-top: 0.25rem;
}
.form-check-input:checked {
    background-color: #198754;
    border-color: #198754;
}
.form-check-input:focus {
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
/* Style Select2 */
.select2-container--bootstrap-5 .select2-selection {
    border: 2px solid #e0e0e0;
    border-radius: 10px !important;
    min-height: calc(3.5rem + 2px);
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: calc(3.5rem + 2px);
    padding-left: 2.5rem;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: calc(3.5rem + 2px);
}
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #667eea;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #667eea;
    color: white;
}
@media (max-width: 768px) {
    .form-switch .form-check-input {
        width: 3em;
        height: 1.5em;
    }
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        border-radius: 8px !important;
        margin-bottom: 5px;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        line-height: 38px;
        padding-left: 12px;
    }
}
</style>", "admin/stock_batch/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\_form.html.twig");
    }
}
