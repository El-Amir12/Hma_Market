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

/* stock/transfer/show.html.twig */
class __TwigTemplate_bbe369cee0f80ba3c33d1e4ac30c7397 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/show.html.twig"));

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

        yield "Détail transfert - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 4, $this->source); })()), "transferNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 22, $this->source); })()), "transferNumber", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                Détail du transfert
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <!-- Carte principale -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                            Informations du transfert
                        </h5>
                        <span class=\"badge ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 47, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 47), "html", null, true);
        yield "\">
                            <i class=\"fas ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 48, $this->source); })()), "statusIcon", [], "any", false, false, false, 48), "html", null, true);
        yield " me-1\"></i>
                            ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 49, $this->source); })()), "statusLabel", [], "any", false, false, false, 49), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">N° transfert</small>
                                <div class=\"fw-bold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 58, $this->source); })()), "transferNumber", [], "any", false, false, false, 58), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 64, $this->source); })()), "createdAt", [], "any", false, false, false, 64), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Quantité transférée</small>
                                <div class=\"fw-bold\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 70, $this->source); })()), "quantity", [], "any", false, false, false, 70), 0, ",", " "), "html", null, true);
        yield " unités</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Créé par</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user-circle me-1\"></i>
                                    ";
        // line 78
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 78, $this->source); })()), "createdBy", [], "any", false, false, false, 78), "fullName", [], "any", false, false, false, 78)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 78, $this->source); })()), "createdBy", [], "any", false, false, false, 78), "fullName", [], "any", false, false, false, 78), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 78, $this->source); })()), "createdBy", [], "any", false, false, false, 78), "email", [], "any", false, false, false, 78), "html", null, true)));
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Raison</small>
                                <div class=\"fw-bold\">";
        // line 85
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 85, $this->source); })()), "reason", [], "any", false, false, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 85, $this->source); })()), "reason", [], "any", false, false, false, 85), "html", null, true)) : ("Non spécifiée"));
        yield "</div>
                            </div>
                        </div>
                        ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 88, $this->source); })()), "receivedBy", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Réceptionné par</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user-check me-1\"></i>
                                    ";
            // line 94
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 94, $this->source); })()), "receivedBy", [], "any", false, false, false, 94), "fullName", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 94, $this->source); })()), "receivedBy", [], "any", false, false, false, 94), "fullName", [], "any", false, false, false, 94), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 94, $this->source); })()), "receivedBy", [], "any", false, false, false, 94), "email", [], "any", false, false, false, 94), "html", null, true)));
            yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Date de réception</small>
                                <div class=\"fw-bold\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 101, $this->source); })()), "receivedAt", [], "any", false, false, false, 101), "d/m/Y H:i:s"), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 105
        yield "                    </div>
                </div>
            </div>

            <!-- Carte trajet -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-route me-2 text-primary\"></i>
                        Trajet du transfert
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-5\">
                            <div class=\"p-3 bg-light rounded\">
                                <i class=\"fas fa-map-marker-alt fa-2x text-success mb-2\"></i>
                                <h6 class=\"mb-0\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 122, $this->source); })()), "sourceLocation", [], "any", false, false, false, 122), "displayName", [], "any", false, false, false, 122), "html", null, true);
        yield "</h6>
                                <small class=\"text-muted\">Emplacement source</small>
                            </div>
                        </div>
                        <div class=\"col-2 d-flex align-items-center justify-content-center\">
                            <div class=\"transfer-arrow\">
                                <i class=\"fas fa-arrow-right fa-2x text-primary\"></i>
                                <div class=\"small text-muted mt-1\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 129, $this->source); })()), "quantity", [], "any", false, false, false, 129), "html", null, true);
        yield " unités</div>
                            </div>
                        </div>
                        <div class=\"col-5\">
                            <div class=\"p-3 bg-light rounded\">
                                <i class=\"fas fa-map-marker-alt fa-2x text-primary mb-2\"></i>
                                <h6 class=\"mb-0\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 135, $this->source); })()), "destinationLocation", [], "any", false, false, false, 135), "displayName", [], "any", false, false, false, 135), "html", null, true);
        yield "</h6>
                                <small class=\"text-muted\">Emplacement destination</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte lot et produit -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">N° lot</small>
                                <div class=\"fw-bold\"><code>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 156, $this->source); })()), "stockBatch", [], "any", false, false, false, 156), "batchNumber", [], "any", false, false, false, 156), "html", null, true);
        yield "</code></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Produit</small>
                                <div class=\"fw-bold\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 162, $this->source); })()), "stockBatch", [], "any", false, false, false, 162), "product", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Code-barres</small>
                                <div class=\"fw-bold\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 168, $this->source); })()), "stockBatch", [], "any", false, false, false, 168), "product", [], "any", false, false, false, 168), "barcode", [], "any", false, false, false, 168), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Prix unitaire</small>
                                <div class=\"fw-bold\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 174, $this->source); })()), "stockBatch", [], "any", false, false, false, 174), "unitPrice", [], "any", false, false, false, 174), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 174, $this->source); })()), "hmaService", [], "any", false, false, false, 174)), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex gap-2\">
                        ";
        // line 191
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 191, $this->source); })()), "status", [], "any", false, false, false, 191) == "pending")) {
            // line 192
            yield "                            <button type=\"button\" class=\"btn btn-success start-transfer-btn\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192), "html", null, true);
            yield "\" data-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 192, $this->source); })()), "transferNumber", [], "any", false, false, false, 192), "html", null, true);
            yield "\">
                                <i class=\"fas fa-truck me-1\"></i> Expédier le transfert
                            </button>
                            <button type=\"button\" class=\"btn btn-outline-danger cancel-transfer-btn\" data-id=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195), "html", null, true);
            yield "\" data-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 195, $this->source); })()), "transferNumber", [], "any", false, false, false, 195), "html", null, true);
            yield "\">
                                <i class=\"fas fa-ban me-1\"></i> Annuler
                            </button>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 198
(isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 198, $this->source); })()), "status", [], "any", false, false, false, 198) == "in_transit")) {
            // line 199
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
                                <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                            </a>
                            <button type=\"button\" class=\"btn btn-outline-danger cancel-transfer-btn\" data-id=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202), "html", null, true);
            yield "\" data-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 202, $this->source); })()), "transferNumber", [], "any", false, false, false, 202), "html", null, true);
            yield "\">
                                <i class=\"fas fa-ban me-1\"></i> Annuler
                            </button>
                        ";
        }
        // line 206
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["transfer"]) || array_key_exists("transfer", $context) ? $context["transfer"] : (function () { throw new RuntimeError('Variable "transfer" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                            <i class=\"fas fa-print me-1\"></i> Imprimer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation départ -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-truck me-2\"></i> Confirmer le départ</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\"></strong> ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera déduit de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("start-transfer"), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-success\">Confirmer le départ</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation annulation -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-ban me-2\"></i> Annuler le transfert</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est irréversible.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("cancel-transfer"), "html", null, true);
        yield "\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 273
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

        // line 274
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Départ transfert
    const startModal = new bootstrap.Modal(document.getElementById('startTransferModal'));
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    
    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startModal.show();
        });
    });
    
    // Annulation transfert
    const cancelModal = new bootstrap.Modal(document.getElementById('cancelTransferModal'));
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    
    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelModal.show();
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
        return "stock/transfer/show.html.twig";
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
        return array (  490 => 274,  477 => 273,  457 => 263,  425 => 234,  393 => 206,  384 => 202,  377 => 199,  375 => 198,  367 => 195,  358 => 192,  356 => 191,  336 => 174,  327 => 168,  318 => 162,  309 => 156,  285 => 135,  276 => 129,  266 => 122,  247 => 105,  240 => 101,  230 => 94,  223 => 89,  221 => 88,  215 => 85,  205 => 78,  194 => 70,  185 => 64,  176 => 58,  164 => 49,  160 => 48,  156 => 47,  137 => 31,  125 => 22,  118 => 18,  110 => 13,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détail transfert - {{ transfer.transferNumber }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ transfer.transferNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                Détail du transfert
            </h1>
        </div>
        <div>
            <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <!-- Carte principale -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                            Informations du transfert
                        </h5>
                        <span class=\"badge {{ transfer.statusBadgeClass }}\">
                            <i class=\"fas {{ transfer.statusIcon }} me-1\"></i>
                            {{ transfer.statusLabel }}
                        </span>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">N° transfert</small>
                                <div class=\"fw-bold\">{{ transfer.transferNumber }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Date de création</small>
                                <div class=\"fw-bold\">{{ transfer.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Quantité transférée</small>
                                <div class=\"fw-bold\">{{ transfer.quantity|number_format(0, ',', ' ') }} unités</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Créé par</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user-circle me-1\"></i>
                                    {{ transfer.createdBy.fullName ?: transfer.createdBy.email }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Raison</small>
                                <div class=\"fw-bold\">{{ transfer.reason ?: 'Non spécifiée' }}</div>
                            </div>
                        </div>
                        {% if transfer.receivedBy %}
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Réceptionné par</small>
                                <div class=\"fw-bold\">
                                    <i class=\"fas fa-user-check me-1\"></i>
                                    {{ transfer.receivedBy.fullName ?: transfer.receivedBy.email }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Date de réception</small>
                                <div class=\"fw-bold\">{{ transfer.receivedAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Carte trajet -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-route me-2 text-primary\"></i>
                        Trajet du transfert
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-5\">
                            <div class=\"p-3 bg-light rounded\">
                                <i class=\"fas fa-map-marker-alt fa-2x text-success mb-2\"></i>
                                <h6 class=\"mb-0\">{{ transfer.sourceLocation.displayName }}</h6>
                                <small class=\"text-muted\">Emplacement source</small>
                            </div>
                        </div>
                        <div class=\"col-2 d-flex align-items-center justify-content-center\">
                            <div class=\"transfer-arrow\">
                                <i class=\"fas fa-arrow-right fa-2x text-primary\"></i>
                                <div class=\"small text-muted mt-1\">{{ transfer.quantity }} unités</div>
                            </div>
                        </div>
                        <div class=\"col-5\">
                            <div class=\"p-3 bg-light rounded\">
                                <i class=\"fas fa-map-marker-alt fa-2x text-primary mb-2\"></i>
                                <h6 class=\"mb-0\">{{ transfer.destinationLocation.displayName }}</h6>
                                <small class=\"text-muted\">Emplacement destination</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte lot et produit -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-boxes me-2 text-primary\"></i>
                        Lot concerné
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">N° lot</small>
                                <div class=\"fw-bold\"><code>{{ transfer.stockBatch.batchNumber }}</code></div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Produit</small>
                                <div class=\"fw-bold\">{{ transfer.stockBatch.product.name }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Code-barres</small>
                                <div class=\"fw-bold\">{{ transfer.stockBatch.product.barcode }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"border-bottom pb-2 mb-2\">
                                <small class=\"text-muted\">Prix unitaire</small>
                                <div class=\"fw-bold\">{{ transfer.stockBatch.unitPrice|price_with_currency(transfer.hmaService) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class=\"card border-0 shadow-sm mt-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Actions
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex gap-2\">
                        {% if transfer.status == 'pending' %}
                            <button type=\"button\" class=\"btn btn-success start-transfer-btn\" data-id=\"{{ transfer.id }}\" data-number=\"{{ transfer.transferNumber }}\">
                                <i class=\"fas fa-truck me-1\"></i> Expédier le transfert
                            </button>
                            <button type=\"button\" class=\"btn btn-outline-danger cancel-transfer-btn\" data-id=\"{{ transfer.id }}\" data-number=\"{{ transfer.transferNumber }}\">
                                <i class=\"fas fa-ban me-1\"></i> Annuler
                            </button>
                        {% elseif transfer.status == 'in_transit' %}
                            <a href=\"{{ path('app_stock_transfer_receive', {'id': transfer.id}) }}\" class=\"btn btn-info\">
                                <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                            </a>
                            <button type=\"button\" class=\"btn btn-outline-danger cancel-transfer-btn\" data-id=\"{{ transfer.id }}\" data-number=\"{{ transfer.transferNumber }}\">
                                <i class=\"fas fa-ban me-1\"></i> Annuler
                            </button>
                        {% endif %}
                        <a href=\"{{ path('app_stock_transfer_print', {'id': transfer.id}) }}\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                            <i class=\"fas fa-print me-1\"></i> Imprimer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation départ -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-truck me-2\"></i> Confirmer le départ</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\"></strong> ?</p>
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera déduit de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"startTransferForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('start-transfer') }}\">
                    <button type=\"submit\" class=\"btn btn-success\">Confirmer le départ</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modale confirmation annulation -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-ban me-2\"></i> Annuler le transfert</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est irréversible.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel-transfer') }}\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Retour</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Départ transfert
    const startModal = new bootstrap.Modal(document.getElementById('startTransferModal'));
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    
    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startModal.show();
        });
    });
    
    // Annulation transfert
    const cancelModal = new bootstrap.Modal(document.getElementById('cancelTransferModal'));
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    
    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelModal.show();
        });
    });
});
</script>
{% endblock %}", "stock/transfer/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\show.html.twig");
    }
}
