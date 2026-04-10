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

/* admin/location/show.html.twig */
class __TwigTemplate_93bc2c93f13cb57aceb19ac9b3b479a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/location/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/location/show.html.twig"));

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

        yield "Emplacement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les lots stockés à cet emplacement
            </p>
        </div>
        <div>
            <button type=\"button\" class=\"btn btn-danger me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteLocationModal\">
                <i class=\"fas fa-trash me-2\"></i> Supprimer
            </button>
            <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Informations de l'emplacement -->
    <div class=\"row mb-4\">
        <div class=\"col-md-6 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations de l'emplacement
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Code</label>
                                <div class=\"fw-bold\">
                                    ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 61, $this->source); })()), "code", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                                        <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 62, $this->source); })()), "code", [], "any", false, false, false, 62), "html", null, true);
            yield "</span>
                                    ";
        } else {
            // line 64
            yield "                                        <span class=\"text-muted\">—</span>
                                    ";
        }
        // line 66
        yield "                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Nom</label>
                                <div class=\"fw-bold\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Statut</label>
                                <div>
                                    <span class=\"badge ";
        // line 77
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 77, $this->source); })()), "isActive", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                        ";
        // line 78
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 78, $this->source); })()), "isActive", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                        <div class=\"mt-2\">
                            <label class=\"text-muted small fw-bold\">Description</label>
                            <p class=\"mb-0\">";
            // line 87
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 87, $this->source); })()), "description", [], "any", false, false, false, 87), "html", null, true));
            yield "</p>
                        </div>
                    ";
        }
        // line 90
        yield "                    
                    <!-- Informations système -->
                    <hr class=\"my-4\">
                    <div class=\"card border-0 bg-secondary bg-opacity-25\">
                        <div class=\"card-body\">
                            <h6 class=\"card-subtitle mb-2 text-white\">
                                <i class=\"fas fa-history me-1\"></i> Informations système
                            </h6>
                            <div class=\"small\">
                                <div class=\"d-flex justify-content-between mb-1\">
                                    <span class=\"text-white-50\">Créé le :</span>
                                    <span class=\"text-white\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 101, $this->source); })()), "createdAt", [], "any", false, false, false, 101), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-white-50\">Lots associés :</span>
                                    <span class=\"text-white\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 105, $this->source); })()), "stockBatches", [], "any", false, false, false, 105)), "html", null, true);
        yield " lot(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques des lots -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-boxes fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 121, $this->source); })()), "total_batches", [], "any", false, false, false, 121), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Total lots</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-check-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 130, $this->source); })()), "active_batches", [], "any", false, false, false, 130), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Lots actifs</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-chart-line fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 139, $this->source); })()), "total_quantity", [], "any", false, false, false, 139), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Unités en stock</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-list me-2\"></i> Lots stockés à cet emplacement
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Date expiration</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 169
            yield "                            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 169) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 169) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 170
            yield "                            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 170) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 170) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 170) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 171
            yield "                            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 171) <= 10);
            // line 172
            yield "                            
                            <tr class=\"
                                ";
            // line 174
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 174, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger
                                ";
            } elseif ((($tmp =             // line 175
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 175, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning
                                ";
            } elseif ((($tmp =             // line 176
(isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 176, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info
                                ";
            }
            // line 178
            yield "                            \">
                                <td>
                                    <strong>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 180), "html", null, true);
            yield "</strong>
                                    ";
            // line 181
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 182
                yield "                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-receipt me-1\"></i>
                                            N° ";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 185), "purchase", [], "any", false, false, false, 185), "purchaseNumber", [], "any", false, false, false, 185), "html", null, true);
                yield "
                                        </small>
                                    ";
            }
            // line 188
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                        <i class=\"fas fa-box me-1\"></i>
                                        ";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192)), "truncate", [40], "method", false, false, false, 192), "html", null, true);
            yield "
                                    </a>
                                    <br>
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-barcode me-1\"></i>";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 196), "barcode", [], "any", false, false, false, 196), "html", null, true);
            yield "
                                    </small>
                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 201), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 202), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height: 4px; width: 100px;\">
                                            ";
            // line 204
            $context["percentage"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 204) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 204)) * 100));
            // line 205
            yield "                                            <div class=\"progress-bar 
                                                ";
            // line 206
            if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 206, $this->source); })()) <= 10)) {
                yield "bg-danger
                                                ";
            } elseif ((            // line 207
(isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 207, $this->source); })()) <= 30)) {
                yield "bg-warning
                                                ";
            } else {
                // line 208
                yield "bg-success
                                                ";
            }
            // line 209
            yield "\" 
                                                style=\"width: ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 210, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        ";
            // line 212
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 212, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 213
                yield "                                            <br>
                                            <span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>
                                        ";
            }
            // line 216
            yield "                                    </div>
                                </td>
                                <td>";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 218), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 218)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 220
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 221
                yield "                                        <div>
                                            <span class=\"text-dark fw-bold\">";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 222), "d/m/Y"), "html", null, true);
                yield "</span>
                                            ";
                // line 223
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 223, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 224
                    yield "                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 225
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 226
                    yield "                                                <br><span class=\"badge bg-warning text-dark mt-1\">Bientôt</span>
                                            ";
                }
                // line 228
                yield "                                        </div>
                                    ";
            } else {
                // line 230
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 232
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 234
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 235
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir détails\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 244)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier emplacement\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 251
        if (!$context['_iterated']) {
            // line 252
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot stocké à cet emplacement</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        ";
        // line 265
        if ((array_key_exists("totalPages", $context) && ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 265, $this->source); })()) > 1))) {
            // line 266
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 269
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 269, $this->source); })()) > 1)) {
                // line 270
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 271, $this->source); })()) - 1)]), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 276
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 276, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 277
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 277, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 278, $this->source); })()), "id", [], "any", false, false, false, 278), "page" => $context["page"]]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            yield "                    ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 281, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 281, $this->source); })()))) {
                // line 282
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, false, 283), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 283, $this->source); })()) + 1)]), "html", null, true);
                yield "\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 288
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 292
        yield "    </div>
</div>

<!-- Modal de suppression unique -->
<div class=\"modal fade\" id=\"deleteLocationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'emplacement
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"deleteLocationForm\" method=\"post\" action=\"";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 305, $this->source); })()), "id", [], "any", false, false, false, 305)]), "html", null, true);
        yield "\">
                <div class=\"modal-body\">
                    <p id=\"deleteLocationMessage\"></p>
                    <div id=\"reassignLocationContainer\" style=\"display: none;\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <span id=\"batchesCountInfo\"></span>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Réassigner les lots à :
                            </label>
                            <select name=\"new_location_id\" id=\"newLocationSelect\" class=\"form-select\">
                                <option value=\"\">-- Aucun emplacement (supprimer la référence) --</option>
                                ";
        // line 319
        if ((array_key_exists("all_locations", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["all_locations"]) || array_key_exists("all_locations", $context) ? $context["all_locations"] : (function () { throw new RuntimeError('Variable "all_locations" does not exist.', 319, $this->source); })())))) {
            // line 320
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["all_locations"]) || array_key_exists("all_locations", $context) ? $context["all_locations"] : (function () { throw new RuntimeError('Variable "all_locations" does not exist.', 320, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["otherLocation"]) {
                // line 321
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["otherLocation"], "id", [], "any", false, false, false, 321) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 321, $this->source); })()), "id", [], "any", false, false, false, 321))) {
                    // line 322
                    yield "                                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherLocation"], "id", [], "any", false, false, false, 322), "html", null, true);
                    yield "\">
                                                ";
                    // line 323
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherLocation"], "displayName", [], "any", false, false, false, 323), "html", null, true);
                    yield "
                                            </option>
                                        ";
                }
                // line 326
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['otherLocation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            yield "                                ";
        }
        // line 328
        yield "                            </select>
                            <small class=\"text-muted\">Les lots seront déplacés vers cet emplacement.</small>
                        </div>
                    </div>
                    <p class=\"text-danger mb-0 mt-3\">
                        <small>⚠️ Cette action est irréversible.</small>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"hidden\" name=\"_token\" id=\"deleteLocationToken\" value=\"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 338, $this->source); })()), "id", [], "any", false, false, false, 338))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
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

    // line 348
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

        // line 349
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const locationHasBatches = ";
        // line 352
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 352, $this->source); })()), "stockBatches", [], "any", false, false, false, 352)) > 0)) ? ("true") : ("false"));
        yield ";
    const batchesCount = ";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 353, $this->source); })()), "stockBatches", [], "any", false, false, false, 353)), "html", null, true);
        yield ";
    const locationName = \"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 354, $this->source); })()), "name", [], "any", false, false, false, 354), "js"), "html", null, true);
        yield "\";
    const currentLocationId = ";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 355, $this->source); })()), "id", [], "any", false, false, false, 355), "html", null, true);
        yield ";
    
    const deleteModal = document.getElementById('deleteLocationModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function() {
            const message = document.getElementById('deleteLocationMessage');
            const reassignContainer = document.getElementById('reassignLocationContainer');
            const batchesCountInfo = document.getElementById('batchesCountInfo');
            
            if (locationHasBatches) {
                if (message) {
                    message.innerHTML = `<p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>`;
                }
                if (batchesCountInfo) {
                    batchesCountInfo.innerHTML = `Cet emplacement contient <strong>\${batchesCount} lot(s)</strong>.`;
                }
                if (reassignContainer) {
                    reassignContainer.style.display = 'block';
                }
            } else {
                if (message) {
                    message.innerHTML = `
                        <div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>
                        <p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>
                    `;
                }
                if (reassignContainer) {
                    reassignContainer.style.display = 'none';
                }
            }
        });
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 391
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 392
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.table-hover tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
    cursor: pointer;
}
.progress {
    border-radius: 10px;
    overflow: hidden;
}
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.badge {
    font-weight: 500;
}
.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
.table td {
    vertical-align: middle;
}
@media (max-width: 768px) {
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        margin: 1px 0;
    }
}
</style>
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
        return "admin/location/show.html.twig";
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
        return array (  779 => 392,  766 => 391,  720 => 355,  716 => 354,  712 => 353,  708 => 352,  702 => 349,  689 => 348,  669 => 338,  657 => 328,  654 => 327,  648 => 326,  642 => 323,  637 => 322,  634 => 321,  629 => 320,  627 => 319,  610 => 305,  595 => 292,  589 => 288,  581 => 283,  578 => 282,  575 => 281,  564 => 278,  559 => 277,  554 => 276,  546 => 271,  543 => 270,  541 => 269,  536 => 266,  534 => 265,  526 => 259,  514 => 252,  512 => 251,  500 => 244,  493 => 240,  485 => 235,  481 => 234,  477 => 232,  473 => 230,  469 => 228,  465 => 226,  463 => 225,  460 => 224,  458 => 223,  454 => 222,  451 => 221,  449 => 220,  444 => 218,  440 => 216,  435 => 213,  433 => 212,  428 => 210,  425 => 209,  421 => 208,  416 => 207,  412 => 206,  409 => 205,  407 => 204,  402 => 202,  398 => 201,  390 => 196,  383 => 192,  378 => 190,  374 => 188,  368 => 185,  363 => 182,  361 => 181,  357 => 180,  353 => 178,  348 => 176,  344 => 175,  340 => 174,  336 => 172,  333 => 171,  330 => 170,  327 => 169,  322 => 168,  290 => 139,  278 => 130,  266 => 121,  247 => 105,  240 => 101,  227 => 90,  221 => 87,  217 => 85,  215 => 84,  206 => 78,  202 => 77,  192 => 70,  186 => 66,  182 => 64,  176 => 62,  174 => 61,  149 => 39,  143 => 36,  129 => 25,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/location/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Emplacement - {{ location.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_location_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i> Emplacements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        {{ location.name }}
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                {{ location.name }}
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les lots stockés à cet emplacement
            </p>
        </div>
        <div>
            <button type=\"button\" class=\"btn btn-danger me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteLocationModal\">
                <i class=\"fas fa-trash me-2\"></i> Supprimer
            </button>
            <a href=\"{{ path('app_admin_location_edit', {'id': location.id}) }}\" class=\"btn btn-warning me-2\">
                <i class=\"fas fa-edit me-2\"></i> Modifier
            </a>
            <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Informations de l'emplacement -->
    <div class=\"row mb-4\">
        <div class=\"col-md-6 mx-auto\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations de l'emplacement
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Code</label>
                                <div class=\"fw-bold\">
                                    {% if location.code %}
                                        <span class=\"badge bg-info\">{{ location.code }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Nom</label>
                                <div class=\"fw-bold\">{{ location.name }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Statut</label>
                                <div>
                                    <span class=\"badge {{ location.isActive ? 'bg-success' : 'bg-danger' }}\">
                                        {{ location.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% if location.description %}
                        <div class=\"mt-2\">
                            <label class=\"text-muted small fw-bold\">Description</label>
                            <p class=\"mb-0\">{{ location.description|nl2br }}</p>
                        </div>
                    {% endif %}
                    
                    <!-- Informations système -->
                    <hr class=\"my-4\">
                    <div class=\"card border-0 bg-secondary bg-opacity-25\">
                        <div class=\"card-body\">
                            <h6 class=\"card-subtitle mb-2 text-white\">
                                <i class=\"fas fa-history me-1\"></i> Informations système
                            </h6>
                            <div class=\"small\">
                                <div class=\"d-flex justify-content-between mb-1\">
                                    <span class=\"text-white-50\">Créé le :</span>
                                    <span class=\"text-white\">{{ location.createdAt|date('d/m/Y H:i') }}</span>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-white-50\">Lots associés :</span>
                                    <span class=\"text-white\">{{ location.stockBatches|length }} lot(s)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques des lots -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-boxes fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Total lots</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-check-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.active_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Lots actifs</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-chart-line fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_quantity|default(0)|number_format(0, ',', ' ') }}</h3>
                    <small class=\"text-white-50\">Unités en stock</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-list me-2\"></i> Lots stockés à cet emplacement
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Date expiration</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for batch in batches %}
                            {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
                            {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
                            {% set isLowStock = batch.currentQuantity <= 10 %}
                            
                            <tr class=\"
                                {% if isExpired %}table-danger
                                {% elseif isExpiringSoon %}table-warning
                                {% elseif isLowStock %}table-info
                                {% endif %}
                            \">
                                <td>
                                    <strong>{{ batch.batchNumber }}</strong>
                                    {% if batch.purchaseItem %}
                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-receipt me-1\"></i>
                                            N° {{ batch.purchaseItem.purchase.purchaseNumber }}
                                        </small>
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_admin_product_show', {'id': batch.product.id}) }}\" class=\"text-decoration-none\">
                                        <i class=\"fas fa-box me-1\"></i>
                                        {{ batch.product.name|u.truncate(40) }}
                                    </a>
                                    <br>
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-barcode me-1\"></i>{{ batch.product.barcode }}
                                    </small>
                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">{{ batch.currentQuantity }}</span>
                                        <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                        <div class=\"progress mt-1\" style=\"height: 4px; width: 100px;\">
                                            {% set percentage = (batch.currentQuantity / batch.initialQuantity * 100)|round %}
                                            <div class=\"progress-bar 
                                                {% if percentage <= 10 %}bg-danger
                                                {% elseif percentage <= 30 %}bg-warning
                                                {% else %}bg-success
                                                {% endif %}\" 
                                                style=\"width: {{ percentage }}%\"></div>
                                        </div>
                                        {% if isLowStock %}
                                            <br>
                                            <span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                                <td>
                                    {% if batch.expiryDate %}
                                        <div>
                                            <span class=\"text-dark fw-bold\">{{ batch.expiryDate|date('d/m/Y') }}</span>
                                            {% if isExpired %}
                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            {% elseif isExpiringSoon %}
                                                <br><span class=\"badge bg-warning text-dark mt-1\">Bientôt</span>
                                            {% endif %}
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir détails\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier emplacement\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot stocké à cet emplacement</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        {% if totalPages is defined and totalPages > 1 %}
        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_location_show', {'id': location.id, 'page': currentPage - 1}) }}\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    {% endif %}
                    {% for page in 1..totalPages %}
                        <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_location_show', {'id': location.id, 'page': page}) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_location_show', {'id': location.id, 'page': currentPage + 1}) }}\">
                                Suivant <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modal de suppression unique -->
<div class=\"modal fade\" id=\"deleteLocationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer l'emplacement
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"deleteLocationForm\" method=\"post\" action=\"{{ path('app_admin_location_delete', {'id': location.id}) }}\">
                <div class=\"modal-body\">
                    <p id=\"deleteLocationMessage\"></p>
                    <div id=\"reassignLocationContainer\" style=\"display: none;\">
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            <span id=\"batchesCountInfo\"></span>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label fw-bold\">
                                <i class=\"fas fa-map-marker-alt me-1\"></i> Réassigner les lots à :
                            </label>
                            <select name=\"new_location_id\" id=\"newLocationSelect\" class=\"form-select\">
                                <option value=\"\">-- Aucun emplacement (supprimer la référence) --</option>
                                {% if all_locations is defined and all_locations is not empty %}
                                    {% for otherLocation in all_locations %}
                                        {% if otherLocation.id != location.id %}
                                            <option value=\"{{ otherLocation.id }}\">
                                                {{ otherLocation.displayName }}
                                            </option>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </select>
                            <small class=\"text-muted\">Les lots seront déplacés vers cet emplacement.</small>
                        </div>
                    </div>
                    <p class=\"text-danger mb-0 mt-3\">
                        <small>⚠️ Cette action est irréversible.</small>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <input type=\"hidden\" name=\"_token\" id=\"deleteLocationToken\" value=\"{{ csrf_token('delete' ~ location.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
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
    const locationHasBatches = {{ location.stockBatches|length > 0 ? 'true' : 'false' }};
    const batchesCount = {{ location.stockBatches|length }};
    const locationName = \"{{ location.name|escape('js') }}\";
    const currentLocationId = {{ location.id }};
    
    const deleteModal = document.getElementById('deleteLocationModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function() {
            const message = document.getElementById('deleteLocationMessage');
            const reassignContainer = document.getElementById('reassignLocationContainer');
            const batchesCountInfo = document.getElementById('batchesCountInfo');
            
            if (locationHasBatches) {
                if (message) {
                    message.innerHTML = `<p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>`;
                }
                if (batchesCountInfo) {
                    batchesCountInfo.innerHTML = `Cet emplacement contient <strong>\${batchesCount} lot(s)</strong>.`;
                }
                if (reassignContainer) {
                    reassignContainer.style.display = 'block';
                }
            } else {
                if (message) {
                    message.innerHTML = `
                        <div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>
                        <p>Supprimer l'emplacement <strong>\${locationName}</strong> ?</p>
                    `;
                }
                if (reassignContainer) {
                    reassignContainer.style.display = 'none';
                }
            }
        });
    }
});
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.table-hover tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
    cursor: pointer;
}
.progress {
    border-radius: 10px;
    overflow: hidden;
}
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.badge {
    font-weight: 500;
}
.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
.table td {
    vertical-align: middle;
}
@media (max-width: 768px) {
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        margin: 1px 0;
    }
}
</style>
{% endblock %}", "admin/location/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\Location\\show.html.twig");
    }
}
