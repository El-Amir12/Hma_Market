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

/* manager/team/edit.html.twig */
class __TwigTemplate_f9fe1312c9bf5d23187daeab7bcec899 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid px-4\">
    <!-- Header -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"position-relative p-4\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-circle bg-white bg-opacity-20 rounded-3 p-3 me-3\">
                            <i class=\"bi bi-pencil-square text-white fs-1\"></i>
                        </div>
                        <div>
                            <h1 class=\"h2 fw-bold text-white mb-1\">
                                ";
        // line 18
        if ((($tmp = ($context["is_self"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                                    Modifier mon profil
                                ";
        } else {
            // line 21
            yield "                                    Modifier ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 21), "html", null, true);
            yield "
                                ";
        }
        // line 23
        yield "                            </h1>
                            <div class=\"d-flex align-items-center gap-2\">
                                <span class=\"badge bg-white text-primary px-3 py-2 rounded-pill\">
                                    <i class=\"bi bi-building me-1\"></i>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 26), "html", null, true);
        yield "
                                </span>
                                ";
        // line 28
        if ((($tmp =  !($context["is_self"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                                    <span class=\"badge bg-white bg-opacity-20 text-white px-3 py-2 rounded-pill\">
                                        <i class=\"bi bi-person-badge me-1\"></i>
                                        ";
            // line 31
            $context["role"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roles", [], "any", false, false, false, 31), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (($context["r"] ?? null) != "ROLE_USER"); }));
            // line 32
            yield "                                        ";
            if ((($context["role"] ?? null) == "ROLE_ADMIN")) {
                yield "Administrateur
                                        ";
            } elseif ((            // line 33
($context["role"] ?? null) == "ROLE_MANAGER")) {
                yield "Gestionnaire
                                        ";
            } elseif ((            // line 34
($context["role"] ?? null) == "ROLE_STOCK_MANAGER")) {
                yield "Responsable Stock
                                        ";
            } elseif ((            // line 35
($context["role"] ?? null) == "ROLE_CASHIER")) {
                yield "Caissier
                                        ";
            } else {
                // line 36
                yield "Utilisateur
                                        ";
            }
            // line 38
            yield "                                    </span>
                                ";
        }
        // line 40
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-white py-3\">
                    <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <button class=\"nav-link active\" id=\"info-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#info\" type=\"button\" role=\"tab\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations
                            </button>
                        </li>
                    </ul>
                </div>
                
                <div class=\"card-body p-4\">
                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                    
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"info\" role=\"tabpanel\">
                            
                            ";
        // line 68
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "full_name", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-person-fill text-primary me-1\"></i>Nom complet
                                    </label>
                                    ";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "full_name", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "full_name", [], "any", false, false, false, 74), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 77
        yield "                            
                            ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "phone", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-telephone-fill text-success me-1\"></i>Téléphone
                                    </label>
                                    ";
            // line 83
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 84), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 87
        yield "                            
                            ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "employment_date", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-semibold\">
                                        <i class=\"bi bi-calendar-plus-fill text-info me-1\"></i>Date d'embauche
                                    </label>
                                    ";
            // line 93
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employment_date", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 94
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employment_date", [], "any", false, false, false, 94), 'errors');
            yield "
                                    <small class=\"text-muted\">
                                        <i class=\"bi bi-info-circle me-1\"></i>
                                        Modifiable uniquement par les administrateurs
                                    </small>
                                </div>
                            ";
        }
        // line 101
        yield "                            
                            <!-- Message informatif -->
                            ";
        // line 103
        if ((($context["is_self"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "employment_date", [], "any", false, false, false, 103))) {
            // line 104
            yield "                                <div class=\"alert alert-warning mt-3\">
                                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                                    Votre date d'embauche ne peut être modifiée que par un administrateur.
                                </div>
                            ";
        }
        // line 109
        yield "                            
                            ";
        // line 110
        if (((( !($context["is_self"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "full_name", [], "any", false, false, false, 110)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "phone", [], "any", false, false, false, 110)) && CoreExtension::getAttribute($this->env, $this->source, ($context["can_edit"] ?? null), "employment_date", [], "any", false, false, false, 110))) {
            // line 111
            yield "                                <div class=\"alert alert-info\">
                                    <i class=\"bi bi-info-circle me-2\"></i>
                                    Vous pouvez modifier uniquement la date d'embauche de cet employé.
                                </div>
                            ";
        }
        // line 116
        yield "                            
                        </div>
                    </div>
                    
                    <hr class=\"my-4\">
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 123)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-lg\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">
                            <i class=\"bi bi-check-circle-fill me-2\"></i>Enregistrer
                        </button>
                    </div>
                    
                    ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modern-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 120px;
}
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.bg-opacity-20 {
    background-color: rgba(255, 255, 255, 0.2);
}
.nav-tabs .nav-link.active {
    color: #667eea;
    border-bottom: 3px solid #667eea;
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "manager/team/edit.html.twig";
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
        return array (  270 => 131,  259 => 123,  250 => 116,  243 => 111,  241 => 110,  238 => 109,  231 => 104,  229 => 103,  225 => 101,  215 => 94,  211 => 93,  205 => 89,  203 => 88,  200 => 87,  194 => 84,  190 => 83,  184 => 79,  182 => 78,  179 => 77,  173 => 74,  169 => 73,  163 => 69,  161 => 68,  153 => 63,  128 => 40,  124 => 38,  120 => 36,  115 => 35,  111 => 34,  107 => 33,  102 => 32,  100 => 31,  96 => 29,  94 => 28,  89 => 26,  84 => 23,  78 => 21,  74 => 19,  72 => 18,  58 => 6,  51 => 5,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "manager/team/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\manager\\team\\edit.html.twig");
    }
}
