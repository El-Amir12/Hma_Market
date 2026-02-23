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
class __TwigTemplate_07568e3c155c359fb6d445c2bc64b6e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_session_toast.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_session_toast.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["hma_toast"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "get", ["hma_toast"], "method", false, false, false, 3);
        // line 4
        yield "
";
        // line 5
        if ((($tmp = (isset($context["hma_toast"]) || array_key_exists("hma_toast", $context) ? $context["hma_toast"] : (function () { throw new RuntimeError('Variable "hma_toast" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    <div class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast align-items-center text-bg-";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_toast"]) || array_key_exists("hma_toast", $context) ? $context["hma_toast"] : (function () { throw new RuntimeError('Variable "hma_toast" does not exist.', 7, $this->source); })()), "type", [], "any", false, false, false, 7), "html", null, true);
            yield " border-0\" 
             role=\"alert\" 
             aria-live=\"assertive\" 
             aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    <div class=\"d-flex align-items-start\">
                        <i class=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_toast"]) || array_key_exists("hma_toast", $context) ? $context["hma_toast"] : (function () { throw new RuntimeError('Variable "hma_toast" does not exist.', 14, $this->source); })()), "icon", [], "any", false, false, false, 14), "html", null, true);
            yield " me-2 fs-5 mt-1\"></i>
                        <div>
                            <strong class=\"d-block\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_toast"]) || array_key_exists("hma_toast", $context) ? $context["hma_toast"] : (function () { throw new RuntimeError('Variable "hma_toast" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
            yield "</strong>
                            <div>";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["hma_toast"]) || array_key_exists("hma_toast", $context) ? $context["hma_toast"] : (function () { throw new RuntimeError('Variable "hma_toast" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17);
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
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "remove", ["hma_toast"], "method", false, false, false, 60);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  128 => 60,  116 => 50,  80 => 17,  76 => 16,  71 => 14,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/_session_toast.html.twig #}

{% set hma_toast = app.session.get('hma_toast') %}

{% if hma_toast %}
    <div class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 9999\">
        <div class=\"toast align-items-center text-bg-{{ hma_toast.type }} border-0\" 
             role=\"alert\" 
             aria-live=\"assertive\" 
             aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    <div class=\"d-flex align-items-start\">
                        <i class=\"{{ hma_toast.icon }} me-2 fs-5 mt-1\"></i>
                        <div>
                            <strong class=\"d-block\">{{ hma_toast.title }}</strong>
                            <div>{{ hma_toast.message|raw }}</div>
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
                    fetch('{{ path('app_clear_toast') }}', { 
                        method: 'POST',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' }
                    });
                });
            }
        });
    </script>
    
    {# ✅ NETTOYER LA SESSION APRÈS AFFICHAGE #}
    {% do app.session.remove('hma_toast') %}
{% endif %}", "components/_session_toast.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_session_toast.html.twig");
    }
}
