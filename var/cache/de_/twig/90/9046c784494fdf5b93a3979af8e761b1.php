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

/* admin/user/_toggle_modal.html.twig */
class __TwigTemplate_14f581ac11972681bcc966bdb2f0345f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_toggle_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/_toggle_modal.html.twig"));

        // line 1
        yield "<!-- Modal pour activation/désactivation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-labelledby=\"toggleStatusModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\" id=\"toggleStatusModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-warning bg-opacity-10\" style=\"width: 80px; height: 80px;\">
                        <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 3rem;\"></i>
                    </div>
                </div>
                <h4 id=\"toggleStatusMessage\" class=\"mb-3 fw-bold\"></h4>
                <p class=\"text-muted mb-0\" id=\"toggleUserName\"></p>
                <p class=\"text-muted small mt-3\">
                    <i class=\"bi bi-info-circle me-1\"></i>
                    Cette action peut être annulée à tout moment.
                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
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
        return "admin/user/_toggle_modal.html.twig";
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
        return new Source("<!-- Modal pour activation/désactivation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-labelledby=\"toggleStatusModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow-lg\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\" id=\"toggleStatusModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <div class=\"icon-circle mx-auto bg-warning bg-opacity-10\" style=\"width: 80px; height: 80px;\">
                        <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 3rem;\"></i>
                    </div>
                </div>
                <h4 id=\"toggleStatusMessage\" class=\"mb-3 fw-bold\"></h4>
                <p class=\"text-muted mb-0\" id=\"toggleUserName\"></p>
                <p class=\"text-muted small mt-3\">
                    <i class=\"bi bi-info-circle me-1\"></i>
                    Cette action peut être annulée à tout moment.
                </p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center pb-4\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>", "admin/user/_toggle_modal.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\_toggle_modal.html.twig");
    }
}
