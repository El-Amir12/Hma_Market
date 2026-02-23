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

/* admin/user/_delete_modal.html.twig */
class __TwigTemplate_4c3d9efbbc83edc9f47cf303fb89cd0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_delete_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_delete_modal.html.twig"));

        // line 1
        yield "<!-- Modal pour suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger border-0\">
                <h5 class=\"modal-title text-white\" id=\"deleteModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-danger bg-opacity-10\" style=\"width: 80px; height: 80px;\">
                        <i class=\"bi bi-trash-fill text-danger\" style=\"font-size: 2.5rem;\"></i>
                    </div>
                </div>
                <h4 id=\"deleteMessage\" class=\"mb-3 fw-bold\"></h4>
                <p class=\"text-muted mb-0\" id=\"deleteUserName\"></p>
                <div class=\"alert alert-warning mt-3 mb-0 small\">
                    <i class=\"bi bi-exclamation-circle me-2\"></i>
                    Cette action est <strong>irréversible</strong>. Toutes les données associées à cet utilisateur seront définitivement supprimées.
                </div>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash me-2\"></i>Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/_delete_modal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Modal pour suppression -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-danger border-0\">
                <h5 class=\"modal-title text-white\" id=\"deleteModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-danger bg-opacity-10\" style=\"width: 80px; height: 80px;\">
                        <i class=\"bi bi-trash-fill text-danger\" style=\"font-size: 2.5rem;\"></i>
                    </div>
                </div>
                <h4 id=\"deleteMessage\" class=\"mb-3 fw-bold\"></h4>
                <p class=\"text-muted mb-0\" id=\"deleteUserName\"></p>
                <div class=\"alert alert-warning mt-3 mb-0 small\">
                    <i class=\"bi bi-exclamation-circle me-2\"></i>
                    Cette action est <strong>irréversible</strong>. Toutes les données associées à cet utilisateur seront définitivement supprimées.
                </div>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"deleteForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">
                        <i class=\"bi bi-trash me-2\"></i>Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>", "admin/user/_delete_modal.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\_delete_modal.html.twig");
    }
}
