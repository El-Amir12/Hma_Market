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

/* admin/supplier/show.html.twig */
class __TwigTemplate_d6ecc9d92d42860907b8cbbd2b9a8502 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"text-decoration-none\">Fournisseurs</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14)), "truncate", [30], "method", false, false, false, 14), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck text-primary me-2\"></i>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\" class=\"btn btn-warning shadow-sm\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            ";
        // line 25
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 25, $this->source); })()), "purchases", [], "any", false, false, false, 25)) == 0) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 26
            yield "                <button type=\"button\" class=\"btn btn-danger shadow-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteSupplierModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            ";
        }
        // line 30
        yield "        </div>
    </div>

    <!-- Flash messages -->
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["success"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "    
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", ["error"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "
    <div class=\"row g-4\">
        <!-- Colonne gauche : Informations générales -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-primary p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-building text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Nom du fournisseur</small>
                                        <strong class=\"fs-5\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-success p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-user text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Personne de contact</small>
                                        <strong>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 80, $this->source); })()), "contactPerson", [], "any", false, false, false, 80), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-info p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-phone text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Téléphone</small>
                                        <div>
                                            <strong>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 94, $this->source); })()), "phone", [], "any", false, false, false, 94), "html", null, true);
        yield "</strong>
                                            <a href=\"https://wa.me/";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 95, $this->source); })()), "phone", [], "any", false, false, false, 95), [" " => "", "-" => "", "+" => ""]), "html", null, true);
        yield "\" 
                                               target=\"_blank\" 
                                               class=\"text-success ms-2\"
                                               title=\"Discuter sur WhatsApp\">
                                                <i class=\"fab fa-whatsapp\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-warning p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-envelope text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Email</small>
                                        <strong>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), "html", null, true);
        yield "</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex\">
                                    <div class=\"bg-danger p-3 rounded-3 me-3 align-self-start\">
                                        <i class=\"fas fa-map-marker-alt text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Adresse</small>
                                        <p class=\"mb-0\">";
        // line 127
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 127, $this->source); })()), "adress", [], "any", false, false, false, 127), "html", null, true));
        yield "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite : Statistiques et statut -->
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-bar text-primary me-2\"></i>Statut & Statistiques
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-around text-center mb-4\">
                        <div>
                            <div class=\"display-6 fw-bold text-primary\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 148, $this->source); })()), "purchases", [], "any", false, false, false, 148)), "html", null, true);
        yield "</div>
                            <span class=\"text-muted small\">Achats</span>
                        </div>
                        <div class=\"vr\"></div>
                        <div>
                            <div class=\"display-6 fw-bold ";
        // line 153
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 153, $this->source); })()), "isActive", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
        yield "\">
                                <i class=\"fas ";
        // line 154
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 154, $this->source); })()), "isActive", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield "\"></i>
                            </div>
                            <span class=\"text-muted small\">";
        // line 156
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 156, $this->source); })()), "isActive", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "</span>
                        </div>
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span class=\"text-muted\">Créé le :</span>
                        <strong>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 162, $this->source); })()), "createdAt", [], "any", false, false, false, 162), "d/m/Y H:i"), "html", null, true);
        yield "</strong>
                    </div>
                    ";
        // line 164
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 164, $this->source); })()), "updatedAt", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "                    <div class=\"d-flex justify-content-between mb-2\">
                        <span class=\"text-muted\">Modifié le :</span>
                        <strong>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 167, $this->source); })()), "updatedAt", [], "any", false, false, false, 167), "d/m/Y H:i"), "html", null, true);
            yield "</strong>
                    </div>
                    ";
        }
        // line 170
        yield "                    <div class=\"d-flex justify-content-between\">
                        <span class=\"text-muted\">Statut abonnement :</span>
                        ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 172, $this->source); })()), "subscriptionActive", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                            <span class=\"badge bg-info px-3 py-2\">Actif dans quota</span>
                        ";
        } else {
            // line 175
            yield "                            <span class=\"badge bg-warning px-3 py-2\">Hors quota</span>
                        ";
        }
        // line 177
        yield "                    </div>
                </div>
            </div>

            <!-- Actions rapides -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 fw-semibold\">
                        <i class=\"fas fa-bolt text-primary me-2\"></i>Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 190, $this->source); })()), "id", [], "any", false, false, false, 190)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 193, $this->source); })()), "subscriptionActive", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                            <button type=\"button\" 
                                    class=\"btn ";
            // line 195
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 195, $this->source); })()), "isActive", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
            yield " toggle-supplier-btn\"
                                    data-supplier-id=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196), "html", null, true);
            yield "\"
                                    data-supplier-name=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 197, $this->source); })()), "name", [], "any", false, false, false, 197), "html", null, true);
            yield "\"
                                    data-current-status=\"";
            // line 198
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 198, $this->source); })()), "isActive", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
            yield "\"
                                    data-token=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199))), "html", null, true);
            yield "\">
                                <i class=\"fas ";
            // line 200
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 200, $this->source); })()), "isActive", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                ";
            // line 201
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 201, $this->source); })()), "isActive", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                            </button>
                        ";
        }
        // line 204
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achats récents -->
    ";
        // line 214
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 214, $this->source); })()), "purchases", [], "any", false, false, false, 214)) > 0)) {
            // line 215
            yield "    <div class=\"card border-0 shadow-sm mt-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"card-title mb-0 fw-semibold\">
                <i class=\"fas fa-shopping-cart text-primary me-2\"></i>Achats récents
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 233, $this->source); })()), "purchases", [], "any", false, false, false, 233), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
                // line 234
                yield "                        <tr>
                            <td>#";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 235), "html", null, true);
                yield "</td>
                            <td>";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseDate", [], "any", false, false, false, 236), "d/m/Y"), "html", null, true);
                yield "</td>
                            <td>";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "totalAmount", [], "any", false, false, false, 237), 0, ",", " "), "html", null, true);
                yield " FCFA</td>
                            <td>
                                <span class=\"badge bg-";
                // line 239
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 239) == "received")) ? ("success") : ("warning"));
                yield "\">
                                    ";
                // line 240
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 240) == "received")) ? ("Reçu") : ("En attente"));
                yield "
                                </span>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['purchase'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 251
        yield "</div>

<!-- Modals -->
<!-- Modal toggle status -->
<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression -->
";
        // line 278
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 278, $this->source); })()), "purchases", [], "any", false, false, false, 278)) == 0) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 279
            yield "<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Supprimer ";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 288, $this->source); })()), "name", [], "any", false, false, false, 288), "html", null, true);
            yield " ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 293, $this->source); })()), "id", [], "any", false, false, false, 293)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 294, $this->source); })()), "id", [], "any", false, false, false, 294))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 304
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 305
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleSupplierModal'));
    const toggleForm = document.getElementById('toggleSupplierForm');
    const toggleToken = document.getElementById('toggleSupplierToken');
    const toggleMessage = document.getElementById('toggleSupplierMessage');

    document.querySelectorAll('.toggle-supplier-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le fournisseur \"\${name}\" ?`;
            toggleForm.action = `/admin/supplier/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/supplier/show.html.twig";
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
        return array (  585 => 305,  572 => 304,  552 => 294,  548 => 293,  540 => 288,  529 => 279,  527 => 278,  498 => 251,  490 => 245,  479 => 240,  475 => 239,  470 => 237,  466 => 236,  462 => 235,  459 => 234,  455 => 233,  435 => 215,  433 => 214,  419 => 204,  413 => 201,  409 => 200,  405 => 199,  401 => 198,  397 => 197,  393 => 196,  389 => 195,  386 => 194,  384 => 193,  378 => 190,  363 => 177,  359 => 175,  355 => 173,  353 => 172,  349 => 170,  343 => 167,  339 => 165,  337 => 164,  332 => 162,  323 => 156,  318 => 154,  314 => 153,  306 => 148,  282 => 127,  266 => 114,  244 => 95,  240 => 94,  223 => 80,  207 => 67,  185 => 47,  175 => 43,  172 => 42,  168 => 41,  165 => 40,  155 => 36,  152 => 35,  148 => 34,  142 => 30,  136 => 26,  134 => 25,  128 => 22,  121 => 18,  114 => 14,  110 => 13,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/supplier/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ supplier.name }} - Détails - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_supplier_index') }}\" class=\"text-decoration-none\">Fournisseurs</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ supplier.name|u.truncate(30) }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck text-primary me-2\"></i>{{ supplier.name }}
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_admin_supplier_edit', {'id': supplier.id}) }}\" class=\"btn btn-warning shadow-sm\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            {% if supplier.purchases|length == 0 and is_granted('ROLE_ADMIN') %}
                <button type=\"button\" class=\"btn btn-danger shadow-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteSupplierModal\">
                    <i class=\"fas fa-trash me-2\"></i> Supprimer
                </button>
            {% endif %}
        </div>
    </div>

    <!-- Flash messages -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <div class=\"row g-4\">
        <!-- Colonne gauche : Informations générales -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 fw-semibold\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-primary p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-building text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Nom du fournisseur</small>
                                        <strong class=\"fs-5\">{{ supplier.name }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-success p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-user text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Personne de contact</small>
                                        <strong>{{ supplier.contactPerson }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-info p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-phone text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Téléphone</small>
                                        <div>
                                            <strong>{{ supplier.phone }}</strong>
                                            <a href=\"https://wa.me/{{ supplier.phone|replace({' ': '', '-': '', '+': ''}) }}\" 
                                               target=\"_blank\" 
                                               class=\"text-success ms-2\"
                                               title=\"Discuter sur WhatsApp\">
                                                <i class=\"fab fa-whatsapp\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"bg-warning p-3 rounded-3 me-3\">
                                        <i class=\"fas fa-envelope text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Email</small>
                                        <strong>{{ supplier.email }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"p-3 bg-light rounded-3\">
                                <div class=\"d-flex\">
                                    <div class=\"bg-danger p-3 rounded-3 me-3 align-self-start\">
                                        <i class=\"fas fa-map-marker-alt text-white fs-4\"></i>
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Adresse</small>
                                        <p class=\"mb-0\">{{ supplier.adress|nl2br }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite : Statistiques et statut -->
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 fw-semibold\">
                        <i class=\"fas fa-chart-bar text-primary me-2\"></i>Statut & Statistiques
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-around text-center mb-4\">
                        <div>
                            <div class=\"display-6 fw-bold text-primary\">{{ supplier.purchases|length }}</div>
                            <span class=\"text-muted small\">Achats</span>
                        </div>
                        <div class=\"vr\"></div>
                        <div>
                            <div class=\"display-6 fw-bold {{ supplier.isActive ? 'text-success' : 'text-danger' }}\">
                                <i class=\"fas {{ supplier.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                            </div>
                            <span class=\"text-muted small\">{{ supplier.isActive ? 'Actif' : 'Inactif' }}</span>
                        </div>
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span class=\"text-muted\">Créé le :</span>
                        <strong>{{ supplier.createdAt|date('d/m/Y H:i') }}</strong>
                    </div>
                    {% if supplier.updatedAt %}
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span class=\"text-muted\">Modifié le :</span>
                        <strong>{{ supplier.updatedAt|date('d/m/Y H:i') }}</strong>
                    </div>
                    {% endif %}
                    <div class=\"d-flex justify-content-between\">
                        <span class=\"text-muted\">Statut abonnement :</span>
                        {% if supplier.subscriptionActive %}
                            <span class=\"badge bg-info px-3 py-2\">Actif dans quota</span>
                        {% else %}
                            <span class=\"badge bg-warning px-3 py-2\">Hors quota</span>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Actions rapides -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 fw-semibold\">
                        <i class=\"fas fa-bolt text-primary me-2\"></i>Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_admin_supplier_edit', {'id': supplier.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier
                        </a>
                        {% if supplier.subscriptionActive %}
                            <button type=\"button\" 
                                    class=\"btn {{ supplier.isActive ? 'btn-outline-danger' : 'btn-outline-success' }} toggle-supplier-btn\"
                                    data-supplier-id=\"{{ supplier.id }}\"
                                    data-supplier-name=\"{{ supplier.name }}\"
                                    data-current-status=\"{{ supplier.isActive ? 'active' : 'inactive' }}\"
                                    data-token=\"{{ csrf_token('toggle-status' ~ supplier.id) }}\">
                                <i class=\"fas {{ supplier.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                {{ supplier.isActive ? 'Désactiver' : 'Activer' }}
                            </button>
                        {% endif %}
                        <a href=\"{{ path('app_admin_supplier_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achats récents -->
    {% if supplier.purchases|length > 0 %}
    <div class=\"card border-0 shadow-sm mt-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"card-title mb-0 fw-semibold\">
                <i class=\"fas fa-shopping-cart text-primary me-2\"></i>Achats récents
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for purchase in supplier.purchases|slice(0,5) %}
                        <tr>
                            <td>#{{ purchase.id }}</td>
                            <td>{{ purchase.purchaseDate|date('d/m/Y') }}</td>
                            <td>{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</td>
                            <td>
                                <span class=\"badge bg-{{ purchase.status == 'received' ? 'success' : 'warning' }}\">
                                    {{ purchase.status == 'received' ? 'Reçu' : 'En attente' }}
                                </span>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {% endif %}
</div>

<!-- Modals -->
<!-- Modal toggle status -->
<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression -->
{% if supplier.purchases|length == 0 and is_granted('ROLE_ADMIN') %}
<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <h5>Supprimer {{ supplier.name }} ?</h5>
                <p class=\"text-muted\">Cette action est irréversible.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form action=\"{{ path('app_admin_supplier_delete', {'id': supplier.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ supplier.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleSupplierModal'));
    const toggleForm = document.getElementById('toggleSupplierForm');
    const toggleToken = document.getElementById('toggleSupplierToken');
    const toggleMessage = document.getElementById('toggleSupplierMessage');

    document.querySelectorAll('.toggle-supplier-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le fournisseur \"\${name}\" ?`;
            toggleForm.action = `/admin/supplier/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });
});
</script>
{% endblock %}", "admin/supplier/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\show.html.twig");
    }
}
