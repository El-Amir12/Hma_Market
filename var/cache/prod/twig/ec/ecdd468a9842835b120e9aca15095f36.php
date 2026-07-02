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

/* components/_toast.html.twig */
class __TwigTemplate_719de5f418c2cf34e3dd56477f9f9eae extends Template
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
        yield "<div class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 9999\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                yield "            <div class=\"toast align-items-center text-bg-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield " border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"false\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        ";
                // line 8
                if (is_iterable($context["message"])) {
                    // line 9
                    yield "                            <div class=\"d-flex align-items-start\">
                                ";
                    // line 10
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["message"], "icon", [], "any", true, true, false, 10)) {
                        // line 11
                        yield "                                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "icon", [], "any", false, false, false, 11), "html", null, true);
                        yield " me-2 fs-5 mt-1\"></i>
                                ";
                    }
                    // line 13
                    yield "                                <div>
                                    ";
                    // line 14
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["message"], "title", [], "any", true, true, false, 14)) {
                        // line 15
                        yield "                                        <strong class=\"me-auto d-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 15), "html", null, true);
                        yield "</strong>
                                    ";
                    }
                    // line 17
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", true, true, false, 17)) {
                        // line 18
                        yield "                                        <div>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 18);
                        yield "</div>
                                    ";
                    }
                    // line 20
                    yield "                                </div>
                            </div>
                        ";
                } else {
                    // line 23
                    yield "                            ";
                    yield $context["message"];
                    yield "
                        ";
                }
                // line 25
                yield "                    </div>
                    <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Configuration des toasts
    const toastElList = document.querySelectorAll('.toast');
    const toastList = [...toastElList].map(toastEl => {
        // Désactiver autohide pour les toasts avec compte à rebours
        const hasCountdown = toastEl.querySelector('#logout-countdown') !== null;
        
        return new bootstrap.Toast(toastEl, {
            autohide: !hasCountdown,  // Pas d'autohide pour les toasts avec compte à rebours
            delay: 5000
        });
    });
    
    toastList.forEach(toast => toast.show());
    
    // Compte à rebours
    const countdownElement = document.getElementById('logout-countdown');
    if (countdownElement) {
        let seconds = parseInt(countdownElement.textContent);
        
        const countdownInterval = setInterval(function() {
            seconds--;
            countdownElement.textContent = seconds;
            
            if (seconds <= 0) {
                clearInterval(countdownInterval);
                window.location.reload();
            }
        }, 1000);
    }
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_toast.html.twig";
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
        return array (  121 => 31,  115 => 30,  105 => 25,  99 => 23,  94 => 20,  88 => 18,  85 => 17,  79 => 15,  77 => 14,  74 => 13,  68 => 11,  66 => 10,  63 => 9,  61 => 8,  54 => 5,  49 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/_toast.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_toast.html.twig");
    }
}
