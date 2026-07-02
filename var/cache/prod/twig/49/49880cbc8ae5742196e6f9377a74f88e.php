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

/* admin/user/edit.html.twig */
class __TwigTemplate_ada7f3ac4fc3f3fe95b898b833692db4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container-fluid px-4\">
    <!-- Header avec effet visuel -->
    <div class=\"row mb-5\">
        <div class=\"col-12\">
            <div class=\"modern-header position-relative overflow-hidden rounded-4 shadow-lg\">
                <div class=\"floating-shapes\">
                    <div class=\"shape shape-1\"></div>
                    <div class=\"shape shape-2\"></div>
                    <div class=\"shape shape-3\"></div>
                </div>
                
                <div class=\"position-relative p-5\" style=\"z-index: 2;\">
                    <div class=\"d-flex align-items-center gap-4\">
                        <div class=\"icon-wrapper bg-white bg-opacity-20 rounded-4 p-4\">
                            <i class=\"bi bi-pencil-square text-white display-4\"></i>
                        </div>
                        <div>
                            <h1 class=\"display-5 fw-bold text-white mb-2\">Modifier l'utilisateur</h1>
                            <div class=\"d-flex align-items-center gap-3\">
                                <span class=\"badge ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roleBadgeClass", [], "any", false, false, false, 26), "html", null, true);
        yield " py-2 px-3 fs-6\">
                                    <i class=\"bi ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roleIcon", [], "any", false, false, false, 27), "html", null, true);
        yield " me-2\"></i>
                                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roleLabel", [], "any", false, false, false, 28), "html", null, true);
        yield "
                                </span>
                                <span class=\"text-white-50\">
                                    <i class=\"bi bi-person me-1\"></i>
                                    ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 32), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"wave-decoration\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 120\" preserveAspectRatio=\"none\">
                        <path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z\"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire -->
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card border-0 shadow-lg overflow-hidden\">
                <div class=\"card-header bg-white py-4 border-0\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"step-indicator me-3\" style=\"background: linear-gradient(135deg, #fbbf24, #d97706);\">
                                <span class=\"step-number\">✎</span>
                            </div>
                            <div>
                                <h4 class=\"mb-1 fw-bold\">Modification du profil</h4>
                                <p class=\"text-muted mb-0\">Modifiez les informations de l'utilisateur</p>
                            </div>
                        </div>
                        
                        <!-- Badges d'information -->
                        <div class=\"d-flex gap-2\">
                            ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                                <span class=\"badge bg-success py-2 px-3\">
                                    <i class=\"bi bi-check-circle me-1\"></i>Actif
                                </span>
                            ";
        } else {
            // line 71
            yield "                                <span class=\"badge bg-secondary py-2 px-3\">
                                    <i class=\"bi bi-x-circle me-1\"></i>Inactif
                                </span>
                            ";
        }
        // line 75
        yield "                            
                            ";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "subscriptionActive", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "                                <span class=\"badge bg-info py-2 px-3\">
                                    <i class=\"bi bi-box me-1\"></i>Inclus
                                </span>
                            ";
        } else {
            // line 81
            yield "                                <span class=\"badge bg-warning py-2 px-3\">
                                    <i class=\"bi bi-exclamation-triangle me-1\"></i>Hors quota
                                </span>
                            ";
        }
        // line 85
        yield "                        </div>
                    </div>
                </div>

                ";
        // line 89
        yield from $this->load("admin/user/_form.html.twig", 89)->unwrap()->yield(CoreExtension::merge($context, ["edited_user" =>         // line 90
($context["target_user"] ?? null), "button_label" => "Mettre à jour", "is_new" => false, "can_edit_email" =>         // line 93
($context["can_edit_email"] ?? null), "can_edit_role" =>         // line 94
($context["can_edit_role"] ?? null), "is_self" =>         // line 95
($context["is_self"] ?? null)]));
        // line 97
        yield "            </div>
        </div>
    </div>
</div>

<!-- Modal suppression photo -->
";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "<div class=\"modal fade\" id=\"deletePhotoModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Supprimer la photo
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <img src=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 116))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 117), "html", null, true);
            yield "\" 
                         class=\"rounded-circle shadow-lg\"
                         style=\"width: 100px; height: 100px; object-fit: cover;\">
                </div>
                <h5 class=\"mb-3\">Êtes-vous sûr de vouloir supprimer cette photo ?</h5>
                <p class=\"text-muted mb-0\">Cette action ne peut pas être annulée.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form action=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete_photo", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-photo" . CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 129))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash me-2\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.step-indicator {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.step-number {
    color: white;
    font-size: 1.8rem;
    font-weight: bold;
    line-height: 1;
}

.modern-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    min-height: 180px;
}

.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.shape-1 {
    width: 250px;
    height: 250px;
    top: -120px;
    right: -50px;
    animation: float 8s ease-in-out infinite;
}

.shape-2 {
    width: 180px;
    height: 180px;
    bottom: -70px;
    left: -30px;
    animation: float 12s ease-in-out infinite reverse;
}

.shape-3 {
    width: 130px;
    height: 130px;
    top: 30%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(10deg); }
}

.icon-wrapper {
    transition: transform 0.3s ease;
}

.icon-wrapper:hover {
    transform: scale(1.05) rotate(5deg);
}

.wave-decoration {
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    line-height: 0;
    z-index: 2;
}

.wave-decoration svg {
    width: 100%;
    height: 50px;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.8) !important;
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
        return "admin/user/edit.html.twig";
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
        return array (  258 => 142,  251 => 141,  235 => 129,  231 => 128,  217 => 117,  213 => 116,  199 => 104,  197 => 103,  189 => 97,  187 => 95,  186 => 94,  185 => 93,  184 => 90,  183 => 89,  177 => 85,  171 => 81,  165 => 77,  163 => 76,  160 => 75,  154 => 71,  148 => 67,  146 => 66,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  73 => 7,  66 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/edit.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\edit.html.twig");
    }
}
