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
class __TwigTemplate_256a3c1e9a22248c64a83e4bd5f0e831 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_toast.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_toast.html.twig"));

        // line 2
        yield "<div class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 9999\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [], "any", false, false, false, 3));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  127 => 31,  121 => 30,  111 => 25,  105 => 23,  100 => 20,  94 => 18,  91 => 17,  85 => 15,  83 => 14,  80 => 13,  74 => 11,  72 => 10,  69 => 9,  67 => 8,  60 => 5,  55 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/_toast.html.twig #}
<div class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"z-index: 9999\">
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"toast align-items-center text-bg-{{ type }} border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"false\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        {% if message is iterable %}
                            <div class=\"d-flex align-items-start\">
                                {% if message.icon is defined %}
                                    <i class=\"{{ message.icon }} me-2 fs-5 mt-1\"></i>
                                {% endif %}
                                <div>
                                    {% if message.title is defined %}
                                        <strong class=\"me-auto d-block\">{{ message.title }}</strong>
                                    {% endif %}
                                    {% if message.message is defined %}
                                        <div>{{ message.message|raw }}</div>
                                    {% endif %}
                                </div>
                            </div>
                        {% else %}
                            {{ message|raw }}
                        {% endif %}
                    </div>
                    <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\"></button>
                </div>
            </div>
        {% endfor %}
    {% endfor %}
</div>

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
</script>", "components/_toast.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\components\\_toast.html.twig");
    }
}
