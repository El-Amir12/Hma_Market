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

/* supplier_credit_note/_form.html.twig */
class __TwigTemplate_d6e6157e83e16adf5640c12dab3f3956 extends Template
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
        yield "<div class=\"card shadow-sm\">
    <div class=\"card-header bg-white\">
        <h5 class=\"mb-0\">
            <i class=\"fas fa-file-alt me-2\"></i>
            Formulaire de signalement
        </h5>
    </div>
    <div class=\"card-body\">
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "issueType", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Type de problème"]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "issueType", [], "any", false, false, false, 15), 'widget');
        yield "
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "issueType", [], "any", false, false, false, 16), 'errors');
        yield "
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Priorité"]);
        yield "
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", false, false, false, 20), 'widget');
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", false, false, false, 21), 'errors');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "affected_quantity", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Quantité concernée"]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "affected_quantity", [], "any", false, false, false, 28), 'widget');
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "affected_quantity", [], "any", false, false, false, 29), 'errors');
        yield "
                <small class=\"text-muted\">Laissez vide pour un montant uniquement</small>
            </div>
            <div class=\"col-md-6 mb-3\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declaredAmount", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Montant déclaré (FCFA)"]);
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declaredAmount", [], "any", false, false, false, 34), 'widget');
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "declaredAmount", [], "any", false, false, false, 35), 'errors');
        yield "
                <small class=\"text-muted\">Calculé automatiquement si vous renseignez la quantité</small>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_action", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Action recommandée sur le stock"]);
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_action", [], "any", false, false, false, 43), 'widget');
        yield "
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "stock_action", [], "any", false, false, false, 44), 'errors');
        yield "
                <small class=\"text-muted\">Cette action sera enregistrée dans l'historique comme recommandation</small>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description détaillée"]);
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 52), 'widget');
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 53), 'errors');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 mb-3\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attachments", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Pièces jointes"]);
        yield "
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attachments", [], "any", false, false, false, 60), 'widget');
        yield "
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attachments", [], "any", false, false, false, 61), 'errors');
        yield "
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Formats supportés: JPG, PNG, GIF, WEBP, MP4, MPEG, MOV (max 50Mo par fichier)
                </small>
            </div>
        </div>

        <div class=\"d-flex justify-content-end gap-2\">
            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save me-1\"></i> Signaler le problème
            </button>
        </div>

        ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "supplier_credit_note/_form.html.twig";
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
        return array (  189 => 78,  178 => 70,  166 => 61,  162 => 60,  158 => 59,  149 => 53,  145 => 52,  141 => 51,  131 => 44,  127 => 43,  123 => 42,  113 => 35,  109 => 34,  105 => 33,  98 => 29,  94 => 28,  90 => 27,  81 => 21,  77 => 20,  73 => 19,  67 => 16,  63 => 15,  59 => 14,  52 => 10,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "supplier_credit_note/_form.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\_form.html.twig");
    }
}
