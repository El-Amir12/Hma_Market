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

/* components/_session_toast.html.twig */
class __TwigTemplate_b178f27582fb055aa199889eae4abe3b extends Template
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
        yield "
";
        // line 3
        $context["hma_toast"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3), "get", ["hma_toast"], "method", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        if ((($tmp = ($context["hma_toast"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    <div class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast align-items-center text-bg-";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_toast"] ?? null), "type", [], "any", false, false, false, 7), "html", null, true);
            yield " border-0\" 
             role=\"alert\" 
             aria-live=\"assertive\" 
             aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    <div class=\"d-flex align-items-start\">
                        <i class=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_toast"] ?? null), "icon", [], "any", false, false, false, 14), "html", null, true);
            yield " me-2 fs-5 mt-1\"></i>
                        <div>
                            <strong class=\"d-block\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hma_toast"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
            yield "</strong>
                            <div>";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["hma_toast"] ?? null), "message", [], "any", false, false, false, 17);
            yield "</div>
                        </div>
                    </div>
                </div>
                <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastEl = document.querySelector('.toast');
            if (toastEl) {
                // Afficher le toast
                const toast = new bootstrap.Toast(toastEl, { autohide: false });
                toast.show();
                
                // Compte à rebours
                const countdownEl = document.getElementById('logout-countdown');
                if (countdownEl) {
                    let seconds = parseInt(countdownEl.textContent);
                    const interval = setInterval(function() {
                        seconds--;
                        countdownEl.textContent = seconds;
                        if (seconds <= 0) {
                            clearInterval(interval);
                            window.location.reload();
                        }
                    }, 1000);
                }
                
                // Nettoyer la session à la fermeture
                toastEl.querySelector('.btn-close').addEventListener('click', function() {
                    fetch('";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_clear_toast");
            yield "', { 
                        method: 'POST',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' }
                    });
                });
            }
        });
    </script>
    
    ";
            // line 60
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 60), "remove", ["hma_toast"], "method", false, false, false, 60);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_session_toast.html.twig";
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
        return array (  122 => 60,  110 => 50,  74 => 17,  70 => 16,  65 => 14,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_session_toast.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_session_toast.html.twig");
    }
}
