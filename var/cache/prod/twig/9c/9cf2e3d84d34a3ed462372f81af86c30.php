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

/* admin/supplier/_form.html.twig */
class __TwigTemplate_d4371359999af91c065e17ff8e639e08 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"row g-3 g-md-4\">
    <!-- Carte Informations fournisseur -->
    <div class=\"col-12\">
        <div class=\"card shadow-lg border-0 h-100 card-hover\">
            <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                    <i class=\"fas fa-truck me-2\"></i>
                    ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", false, false, false, 10)))) {
            // line 11
            yield "                        Modifier le fournisseur
                    ";
        } else {
            // line 13
            yield "                        Nouveau fournisseur
                    ";
        }
        // line 15
        yield "                </h5>
            </div>
            <div class=\"card-body p-3 p-md-4\">
                <!-- Informations de base -->
                <div class=\"row g-3\">
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "autocomplete" => "off"]]);
        // line 26
        yield "
                            <label for=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
                                <i class=\"fas fa-building me-1\"></i> Nom du fournisseur *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 31), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact_person", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Jean Dupont", "autocomplete" => "off"]]);
        // line 41
        yield "
                            <label for=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact_person", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
                                <i class=\"fas fa-user me-1\"></i> Personne de contact *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contact_person", [], "any", false, false, false, 46), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: +229 61 23 45 67", "autocomplete" => "off"]]);
        // line 56
        yield "
                            <label for=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "\">
                                <i class=\"fas fa-phone me-1\"></i> Téléphone *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 61), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\">
                        <div class=\"form-floating\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: contact@fournisseur.com", "autocomplete" => "off"]]);
        // line 71
        yield "
                            <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\">
                                <i class=\"fas fa-envelope me-1\"></i> Email *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 76), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-floating\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adress", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "style" => "height: 100px"]]);
        // line 86
        yield "
                            <label for=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adress", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Adresse *
                            </label>
                            <div class=\"invalid-feedback d-block\">
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "adress", [], "any", false, false, false, 91), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <hr class=\"my-3 my-md-4\">

                <!-- Statut -->
                <div class=\"card border-0 bg-light mb-0\">
                    <div class=\"card-body p-3 p-md-4\">
                        <h6 class=\"card-title text-primary mb-3 fs-6 fs-md-5\">
                            <i class=\"fas fa-toggle-on me-2\"></i> Statut du fournisseur
                        </h6>
                        <div class=\"d-flex flex-wrap align-items-center gap-2 gap-md-3\">
                            <div class=\"form-check form-switch\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 110
        yield "
                                <label class=\"form-check-label small\" for=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                                    ";
        // line 112
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "isActive", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Fournisseur actif") : ("Fournisseur inactif"));
        yield "
                                </label>
                            </div>
                            <span class=\"badge ";
        // line 115
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "isActive", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " px-2 px-md-3 py-1 py-md-2\">
                                ";
        // line 116
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "isActive", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                            </span>
                        </div>
                        <small class=\"text-muted mt-2 d-block small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Les fournisseurs inactifs ne seront pas disponibles pour les achats.
                        </small>
                    </div>
                </div>
            </div>

            <!-- ✅ Footer avec boutons d'action responsive -->
            <div class=\"card-footer bg-light py-3\">
                <div class=\"action-buttons-wrapper\">
                    ";
        // line 131
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" 
                       class=\"btn btn-outline-secondary btn-action\">
                        <i class=\"fas fa-times me-1 me-sm-2\"></i> 
                        <span class=\"btn-text\">Annuler</span>
                    </a>
                    
                    ";
        // line 138
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", false, false, false, 138)))) {
            // line 139
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-info btn-action\">
                            <i class=\"fas fa-eye me-1 me-sm-2\"></i> 
                            <span class=\"btn-text\">Voir</span>
                        </a>
                    ";
        }
        // line 145
        yield "                    
                    ";
        // line 147
        yield "                    <button type=\"submit\" class=\"btn btn-primary btn-action btn-action-primary\">
                        <i class=\"fas fa-save me-1 me-sm-2\"></i> 
                        <span class=\"btn-text\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 156
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/supplier/_form.html.twig";
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
        return array (  263 => 156,  253 => 149,  249 => 147,  246 => 145,  236 => 139,  233 => 138,  223 => 131,  206 => 116,  202 => 115,  196 => 112,  192 => 111,  189 => 110,  187 => 107,  168 => 91,  161 => 87,  158 => 86,  156 => 82,  147 => 76,  140 => 72,  137 => 71,  135 => 67,  126 => 61,  119 => 57,  116 => 56,  114 => 52,  105 => 46,  98 => 42,  95 => 41,  93 => 37,  84 => 31,  77 => 27,  74 => 26,  72 => 22,  63 => 15,  59 => 13,  55 => 11,  53 => 10,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/supplier/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\_form.html.twig");
    }
}
