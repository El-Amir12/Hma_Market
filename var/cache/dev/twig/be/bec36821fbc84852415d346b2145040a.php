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

/* admin/product/index.html.twig */
class __TwigTemplate_264c260e4d07edf1575ad9eb69f11841 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

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

        yield "Gestion des Produits - HMA Market";
        
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
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i>Catalogue des Produits
            </h1>
            <p class=\"text-muted mb-0\">Gérez votre inventaire et catalogue</p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-2\"></i> Scanner
            </button>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-2\"></i> Nouveau
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["success"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-check-circle me-2\"></i>
                <span>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["error"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <span>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "
    <!-- Stats Cards -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Total Produits</h6>
                            <h3 class=\"mb-0 fw-bold\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-box fa-lg text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Actifs</h6>
                            <h3 class=\"mb-0 fw-bold\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 71, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 71, $this->source); })()), "isActive", [], "any", false, false, false, 71); })), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-check-circle fa-lg text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Stock Faible</h6>
                            <h3 class=\"mb-0 fw-bold\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 87, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 87, $this->source); })()), "minQuantity", [], "any", false, false, false, 87) > 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 87, $this->source); })()), "stockQuantity", [], "any", false, false, false, 87) <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 87, $this->source); })()), "minQuantity", [], "any", false, false, false, 87))); })), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-warning bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-exclamation-triangle fa-lg text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Périssables</h6>
                            <h3 class=\"mb-0 fw-bold\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 103, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 103, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 103); })), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-calendar-alt fa-lg text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filters -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3 align-items-center\">
                    <!-- Recherche -->
                    <div class=\"col-md-4\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" 
                                   name=\"search\" 
                                   value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control border-start-0\" 
                                   placeholder=\"Rechercher un produit...\">
                            ";
        // line 130
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 130, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
            yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fas fa-times\"></i>
                                </a>
                            ";
        }
        // line 135
        yield "                        </div>
                    </div>
                    
                    <!-- Sélection de catégorie hiérarchique -->
                    <div class=\"col-md-4\">
                        <select name=\"category\" class=\"form-select\" id=\"category-select\">
                            <option value=\"0\">Toutes les catégories</option>
                            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 143
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\" 
                                        ";
            // line 144
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 144, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 144))) ? ("selected") : (""));
            yield "
                                        class=\"";
            // line 145
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isParent", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold") : (""));
            yield "\">
                                    ";
            // line 146
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isParent", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "                                        📁 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 147), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 147), "html", null, true);
                yield ")
                                    ";
            } else {
                // line 149
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 149)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "&nbsp;&nbsp;&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                                        📄 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 150), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 150), "html", null, true);
                yield ")
                                    ";
            }
            // line 152
            yield "                                </option>
                                ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 153));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 154
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 154), "html", null, true);
                yield "\" 
                                            ";
                // line 155
                yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 155, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 155))) ? ("selected") : (""));
                yield "
                                            class=\"ms-3 ";
                // line 156
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isParent", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold") : (""));
                yield "\">
                                        ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "level", [], "any", false, false, false, 157)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "&nbsp;&nbsp;&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isParent", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 159
                    yield "                                            📂 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 159), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "productCount", [], "any", false, false, false, 159), "html", null, true);
                    yield ")
                                        ";
                } else {
                    // line 161
                    yield "                                            📄 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 161), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "productCount", [], "any", false, false, false, 161), "html", null, true);
                    yield ")
                                        ";
                }
                // line 163
                yield "                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "                        </select>
                    </div>
                    
                    <!-- Filtres de statut -->
                    <div class=\"col-md-4\">
                        <div class=\"d-flex flex-wrap gap-2\">
                            <select name=\"status\" class=\"form-select w-auto\" onchange=\"document.getElementById('filter-form').submit()\">
                                <option value=\"\">Tous les statuts</option>
                                <option value=\"active\" ";
        // line 174
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 174, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                                <option value=\"inactive\" ";
        // line 175
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 175, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                                <option value=\"low-stock\" ";
        // line 176
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 176, $this->source); })()) == "low-stock")) ? ("selected") : (""));
        yield ">Stock faible</option>
                            </select>
                            
                            <select name=\"expiry_type\" class=\"form-select w-auto\" onchange=\"document.getElementById('filter-form').submit()\">
                                <option value=\"\">Tous les types</option>
                                <option value=\"perishable\" ";
        // line 181
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 181, $this->source); })()) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                                <option value=\"non-perishable\" ";
        // line 182
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 182, $this->source); })()) == "non-perishable")) ? ("selected") : (""));
        yield ">Non périssables</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Products Grid -->
    <div class=\"row g-3\">
        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 193, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 194
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100 product-card\">
                <div class=\"position-relative overflow-hidden\" style=\"height: 180px;\">
                    ";
            // line 197
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 197) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 197) != "default-product.png"))) {
                // line 198
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 198))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199), "html", null, true);
                yield "\" 
                            class=\"w-100 h-100 object-fit-cover\">
                    ";
            } else {
                // line 202
                yield "                        <div class=\"w-100 h-100 d-flex flex-column align-items-center justify-content-center bg-light text-muted\">
                            <i class=\"fas fa-box fa-3x mb-2\"></i>
                            <small>Pas d'image</small>
                        </div>
                    ";
            }
            // line 207
            yield "                    
                    <!-- Status Badge -->
                    <div class=\"position-absolute top-0 start-0 m-2\">
                        <span class=\"badge ";
            // line 210
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                            ";
            // line 211
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                        </span>
                    </div>
                </div>

                <!-- Product Info -->
                <div class=\"card-body py-2\">
                    <h2 class=\"card-title mb-2 fw-bold text-center text-truncate\" title=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 218), "html", null, true);
            yield "\">
                        ";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 219), "html", null, true);
            yield "
                    </h2>

                    <div class=\"mb-2\">
                        <!-- Prix -->
                        <div class=\"row mb-2 g-1\">
                            <div class=\"col-6\">
                                <div class=\"text-primary\">
                                    <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-arrow-down me-1\"></i>Achat
                                    </small>
                                    <div class=\"fw-bold\" style=\"font-size: 0.95rem;\">
                                        ";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 231), 0, ",", " "), "html", null, true);
            yield " FCFA
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"text-success text-end\">
                                    <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-arrow-up me-1\"></i>Vente
                                    </small>
                                    <div class=\"fw-bold\" style=\"font-size: 0.95rem;\">
                                        ";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 241), 0, ",", " "), "html", null, true);
            yield " FCFA
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Marge -->
                        ";
            // line 248
            $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 248) - CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 248));
            // line 249
            yield "                        ";
            $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 249) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 249, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 249)) * 100), 1)) : (0));
            // line 250
            yield "                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <small class=\"text-muted\" style=\"font-size: 0.75rem;\">Marge</small>
                            <span class=\"badge ";
            // line 252
            yield ((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 252, $this->source); })()) >= 30)) ? ("bg-success") : (((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 252, $this->source); })()) >= 15)) ? ("bg-warning text-dark") : ("bg-danger"))));
            yield " py-1\" style=\"font-size: 0.7rem;\">
                                ";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 253, $this->source); })()), "html", null, true);
            yield "%
                            </span>
                        </div>
                        
                        <!-- Stock -->
                        <div class=\"row mb-2 g-1\">
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-box text-primary me-1\" style=\"font-size: 0.85rem;\"></i>
                                    <div>
                                        <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">Stock restant</small>
                                        <div class=\"fw-bold ";
            // line 264
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 264) <= 0)) ? ("text-danger") : (((((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 264) > 0) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 264) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 264)))) ? ("text-warning") : ("text-success"))));
            yield "\" style=\"font-size: 0.9rem;\">
                                            ";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 265), "html", null, true);
            yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center justify-content-end\">
                                    <div class=\"text-end\">
                                        <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">Stock min</small>
                                        <div class=\"fw-bold\" style=\"font-size: 0.9rem;\">
                                            ";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 275), "html", null, true);
            yield "
                                        </div>
                                    </div>
                                    <i class=\"fas fa-exclamation-circle text-warning ms-1\" style=\"font-size: 0.85rem;\"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Code-barres (CENTRÉ et remplace la catégorie) -->
                        <div class=\"mb-2 text-center\">
                            <div class=\"text-truncate\" style=\"font-family: 'Courier New', monospace; font-size: 0.8rem; background-color: #f8f9fa; padding: 4px 8px; border-radius: 4px;\">
                                <i class=\"fas fa-barcode me-1 text-muted\" style=\"font-size: 0.85rem;\"></i>";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 286), "html", null, true);
            yield "
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class=\"d-flex justify-content-between gap-1 mt-2\">
                        <a href=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 293)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-secondary flex-fill py-1\" title=\"Voir détails\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        
                        <a href=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 298)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-info flex-fill py-1\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i>
                        </a>
                        
                        <a href=\"";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 303)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-warning flex-fill py-1\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-success flex-fill py-1 toggle-status-btn\"
                                data-product-id=\"";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 310), "html", null, true);
            yield "\"
                                data-product-name=\"";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 311), "html", null, true);
            yield "\"
                                data-is-active=\"";
            // line 312
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 312)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                title=\"";
            // line 313
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                            <i class=\"fas ";
            // line 314
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
                        </button>
                        
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger flex-fill py-1 delete-product-btn\"
                                data-product-id=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 319), "html", null, true);
            yield "\"
                                data-product-name=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 320), "html", null, true);
            yield "\"
                                ";
            // line 321
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchaseItems", [], "any", false, false, false, 321)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 321)) > 0))) {
                yield "disabled title=\"Impossible de supprimer\"";
            } else {
                yield "title=\"Supprimer\"";
            }
            yield ">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 328
        if (!$context['_iterated']) {
            // line 329
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted mb-3\">Aucun produit trouvé</h4>
                    ";
            // line 334
            if (((((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 334, $this->source); })()) || ((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 334, $this->source); })()) > 0)) || (isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 334, $this->source); })())) || (isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 334, $this->source); })()))) {
                // line 335
                yield "                        <p class=\"text-muted mb-3\">
                            ";
                // line 336
                if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 336, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Aucun résultat pour \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 336, $this->source); })()), "html", null, true);
                    yield "\"<br>";
                }
                // line 337
                yield "                            ";
                if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 337, $this->source); })()) > 0)) {
                    yield "Catégorie sélectionnée<br>";
                }
                // line 338
                yield "                            ";
                if ((($tmp = (isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 338, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Filtre de statut appliqué<br>";
                }
                // line 339
                yield "                            ";
                if ((($tmp = (isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 339, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Filtre de type appliqué";
                }
                // line 340
                yield "                        </p>
                        <a href=\"";
                // line 341
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
                yield "\" class=\"btn btn-outline-primary\">
                            Effacer tous les filtres
                        </a>
                    ";
            } else {
                // line 345
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
                yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-2\"></i> Créer votre premier produit
                        </a>
                    ";
            }
            // line 349
            yield "                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 356
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 356, $this->source); })()) > 1)) {
            // line 357
            yield "    <div class=\"d-flex justify-content-center mt-4\">
        <nav aria-label=\"Page navigation\">
            <ul class=\"pagination\">
                ";
            // line 360
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 360, $this->source); })()) > 1)) {
                // line 361
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 362, $this->source); })()), "request", [], "any", false, false, false, 362), "query", [], "any", false, false, false, 362), "all", [], "any", false, false, false, 362), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 362, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>
                ";
            }
            // line 367
            yield "
                ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 368, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 369
                yield "                    ";
                if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 369, $this->source); })()))) {
                    // line 370
                    yield "                        <li class=\"page-item active\">
                            <span class=\"page-link\">";
                    // line 371
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                        </li>
                    ";
                } elseif (((                // line 373
$context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 373, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 373, $this->source); })()) + 2)))) {
                    // line 374
                    yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                    // line 375
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "request", [], "any", false, false, false, 375), "query", [], "any", false, false, false, 375), "all", [], "any", false, false, false, 375), ["page" => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                        </li>
                    ";
                }
                // line 378
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            yield "
                ";
            // line 380
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 380, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 380, $this->source); })()))) {
                // line 381
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 382, $this->source); })()), "request", [], "any", false, false, false, 382), "query", [], "any", false, false, false, 382), "all", [], "any", false, false, false, 382), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 382, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                ";
            }
            // line 387
            yield "            </ul>
        </nav>
    </div>
    <div class=\"text-center text-muted small mt-2\">
        Page ";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 391, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 391, $this->source); })()), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 391, $this->source); })()), "html", null, true);
            yield " produits
    </div>
    ";
        }
        // line 394
        yield "</div>

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Rechercher par code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Code-barres :</label>
                    <input type=\"text\" 
                           id=\"barcode-input\" 
                           class=\"form-control form-control-lg text-center\"
                           placeholder=\"Saisissez ou scannez...\"
                           autofocus
                           style=\"letter-spacing: 2px; font-family: 'Courier New', monospace;\">
                    <div class=\"form-text\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez directement ou utilisez votre scanner USB
                    </div>
                </div>

                <div class=\"alert d-none\" id=\"scan-result\">
                    <div id=\"scan-result-content\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary d-none\" id=\"use-barcode-btn\">
                    <i class=\"fas fa-arrow-right me-1\"></i> Aller au produit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toggle Status Modal - CORRIGÉ -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
                <!-- Token CSRF caché - CORRECTION -->
                <input type=\"hidden\" id=\"modalCsrfToken\" value=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle-status"), "html", null, true);
        yield "\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <!-- Le token sera ajouté dynamiquement par JavaScript -->
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal - CORRIGÉ -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
                <!-- Token CSRF caché - CORRECTION -->
                <input type=\"hidden\" id=\"modalDeleteCsrfToken\" value=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "\">
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <!-- Le token sera ajouté dynamiquement par JavaScript -->
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 488
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

        // line 489
        yield "<style>
.product-card {
    transition: all 0.3s ease;
    border: 1px solid transparent;
    height: 100%;
}

.product-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    border-color: #dee2e6;
}

.object-fit-cover {
    object-fit: cover;
}

.page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.badge {
    font-size: 0.7em;
    font-weight: 500;
    padding: 0.25em 0.5em;
}

/* Style pour les options de catégorie */
#category-select option.fw-bold {
    font-weight: bold !important;
    background-color: #f8f9fa;
}

#category-select option {
    padding: 6px 10px;
}

/* Style pour les catégories enfants */
#category-select option[class*=\"ms-\"] {
    padding-left: 25px;
}

/* Ajustement des boutons */
.product-card .btn-sm {
    padding: 0.2rem 0.4rem;
    font-size: 0.8rem;
    min-width: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .card-body {
        padding: 0.6rem;
    }
    
    .form-select.w-auto {
        width: 100% !important;
        margin-bottom: 0.5rem;
    }
    
    .product-card {
        margin-bottom: 1rem;
    }
}

/* Style compact pour le contenu */
.product-card .card-title {
    font-size: 0.95rem;
    line-height: 1.2;
    margin-bottom: 0.5rem;
}

.product-card .text-muted {
    font-size: 0.75rem;
}

.product-card .fw-bold {
    font-size: 0.9rem;
}

/* Hauteur fixe pour les cartes */
.product-card > .card-body {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

/* Style pour les badges de statut */
.badge.bg-success {
    background-color: #198754 !important;
}

.badge.bg-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.badge.bg-danger {
    background-color: #dc3545 !important;
}

/* Animation pour highlight */
@keyframes highlight {
    0% { background-color: transparent; }
    50% { background-color: rgba(13, 110, 253, 0.1); }
    100% { background-color: transparent; }
}

.highlight-product {
    animation: highlight 1s ease 2;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 604
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

        // line 605
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scanner Modal
    const scanBtn = document.getElementById('scan-barcode-btn');
    const scannerModal = new bootstrap.Modal(document.getElementById('scannerModal'));
    const barcodeInput = document.getElementById('barcode-input');
    const useBarcodeBtn = document.getElementById('use-barcode-btn');
    const scanResult = document.getElementById('scan-result');
    const scanResultContent = document.getElementById('scan-result-content');
    
    let currentBarcode = '';
    let currentProduct = null;

    scanBtn.addEventListener('click', function() {
        scannerModal.show();
        barcodeInput.focus();
        resetScanner();
    });

    scannerModal._element.addEventListener('shown.bs.modal', function() {
        barcodeInput.focus();
    });

    barcodeInput.addEventListener('input', function(e) {
        currentBarcode = this.value.trim();
        if (currentBarcode.length >= 3) {
            checkBarcode(currentBarcode);
        } else {
            resetScanner();
        }
    });

    barcodeInput.addEventListener('keydown', function(e) {
        if ((e.key === 'Enter' || e.key === 'Tab') && currentBarcode) {
            e.preventDefault();
            checkBarcode(currentBarcode);
        }
    });

    useBarcodeBtn.addEventListener('click', function() {
        if (currentProduct) {
            highlightProduct(currentProduct.id);
            scannerModal.hide();
            
            const productCard = document.querySelector(`[data-product-id=\"\${currentProduct.id}\"]`).closest('.product-card');
            if (productCard) {
                productCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        } else if (currentBarcode) {
            window.location.href = `/admin/product/new?barcode=\${encodeURIComponent(currentBarcode)}`;
        }
    });

    function checkBarcode(barcode) {
        scanResult.classList.remove('d-none', 'alert-success', 'alert-warning', 'alert-danger');
        scanResult.classList.add('alert-info');
        scanResultContent.innerHTML = `
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-spinner fa-spin me-2\"></i>
                <span>Vérification en cours...</span>
            </div>
        `;
        useBarcodeBtn.classList.add('d-none');

        fetch(`/admin/product/check/barcode/\${encodeURIComponent(barcode)}`)
            .then(response => {
                if (!response.ok) throw new Error('Erreur réseau');
                return response.json();
            })
            .then(data => {
                currentProduct = data.product;
                
                if (data.exists) {
                    scanResult.classList.remove('alert-info');
                    scanResult.classList.add('alert-success');
                    scanResultContent.innerHTML = `
                        <div>
                            <h6 class=\"mb-2\"><i class=\"fas fa-check-circle me-2\"></i>Produit trouvé !</h6>
                            <div class=\"mb-2\" style=\"font-size: 0.9rem;\">
                                <strong>Nom :</strong> \${data.product.name}<br>
                                <strong>Prix vente :</strong> \${parseInt(data.product.salePrice).toLocaleString('fr-FR')} XAF<br>
                                <strong>Stock :</strong> \${data.product.stockQuantity} unités<br>
                                <strong>Type :</strong> \${data.product.hasExpiryDate ? 'Périssable' : 'Non périssable'}
                            </div>
                            <small class=\"text-muted\">Le produit sera mis en évidence dans la liste</small>
                        </div>
                    `;
                    useBarcodeBtn.classList.remove('d-none');
                    useBarcodeBtn.innerHTML = '<i class=\"fas fa-eye me-1\"></i> Voir dans la liste';
                } else {
                    scanResult.classList.remove('alert-info');
                    scanResult.classList.add('alert-warning');
                    scanResultContent.innerHTML = `
                        <div>
                            <h6 class=\"mb-2\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Produit non trouvé</h6>
                            <p class=\"mb-0\">Ce code-barres n'existe pas dans la base.</p>
                        </div>
                    `;
                    useBarcodeBtn.classList.remove('d-none');
                    useBarcodeBtn.innerHTML = '<i class=\"fas fa-plus me-1\"></i> Créer un produit';
                }
            })
            .catch(error => {
                scanResult.classList.remove('alert-info');
                scanResult.classList.add('alert-danger');
                scanResultContent.innerHTML = `
                    <div>
                        <h6 class=\"mb-2\"><i class=\"fas fa-times-circle me-2\"></i>Erreur</h6>
                        <p class=\"mb-0\">Impossible de vérifier le code-barres.</p>
                    </div>
                `;
                console.error('Erreur:', error);
            });
    }

    function resetScanner() {
        scanResult.classList.add('d-none');
        useBarcodeBtn.classList.add('d-none');
        currentProduct = null;
        scanResultContent.innerHTML = '';
    }

    function highlightProduct(productId) {
        document.querySelectorAll('.product-card').forEach(card => {
            card.classList.remove('border-primary', 'border-3', 'highlight-product');
            card.style.boxShadow = '';
        });
        
        const productCard = document.querySelector(`[data-product-id=\"\${productId}\"]`)?.closest('.product-card');
        if (productCard) {
            productCard.classList.add('border-primary', 'border-3', 'highlight-product');
            productCard.style.boxShadow = '0 0 20px rgba(13, 110, 253, 0.25)';
        }
    }

    // Toggle Status with Modal Confirmation - CORRIGÉ
    const toggleStatusModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleStatusTitle = document.getElementById('toggleStatusTitle');
    const toggleStatusMessage = document.getElementById('toggleStatusMessage');
    const toggleStatusForm = document.getElementById('toggleStatusForm');
    const toggleStatusToken = document.getElementById('toggleStatusToken');
    const toggleStatusBtn = document.getElementById('toggleStatusBtn');
    const modalCsrfToken = document.getElementById('modalCsrfToken');

    document.querySelectorAll('.toggle-status-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            
            toggleStatusTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleStatusMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le produit \"\${productName}\" ?`;
            
            // CORRECTION : Utiliser la route correcte
            toggleStatusForm.action = `/admin/product/\${productId}/toggle-status`;
            
            // CORRECTION : Utiliser le token du modal
            toggleStatusToken.value = modalCsrfToken.value;
            
            toggleStatusBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleStatusBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            
            toggleStatusModal.show();
        });
    });

    // Delete with Modal Confirmation - CORRIGÉ
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const modalDeleteCsrfToken = document.getElementById('modalDeleteCsrfToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\" style=\"font-size: 0.9rem;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p style=\"font-size: 0.95rem;\">Êtes-vous sûr de vouloir supprimer le produit <strong>\"\${productName}\"</strong> ?</p>
            `;
            
            // CORRECTION : Utiliser la route correcte
            deleteForm.action = `/admin/product/\${productId}`;
            
            // CORRECTION : Utiliser le token du modal
            deleteToken.value = modalDeleteCsrfToken.value;
            
            deleteModal.show();
        });
    });

    // Auto-submit category filter
    const categorySelect = document.getElementById('category-select');
    categorySelect.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });

    // Auto-submit search filter
    const searchInput = document.querySelector('input[name=\"search\"]');
    let searchTimeout;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            if (this.value.length >= 2 || this.value.length === 0) {
                this.closest('form').submit();
            }
        }, 500);
    });

    // Add tooltips
    const tooltipTriggerList = document.querySelectorAll('[title]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
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
        return "admin/product/index.html.twig";
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
        return array (  1088 => 605,  1075 => 604,  951 => 489,  938 => 488,  913 => 473,  883 => 446,  829 => 394,  819 => 391,  813 => 387,  805 => 382,  802 => 381,  800 => 380,  797 => 379,  791 => 378,  783 => 375,  780 => 374,  778 => 373,  773 => 371,  770 => 370,  767 => 369,  763 => 368,  760 => 367,  752 => 362,  749 => 361,  747 => 360,  742 => 357,  740 => 356,  735 => 353,  726 => 349,  718 => 345,  711 => 341,  708 => 340,  703 => 339,  698 => 338,  693 => 337,  687 => 336,  684 => 335,  682 => 334,  675 => 329,  673 => 328,  657 => 321,  653 => 320,  649 => 319,  641 => 314,  637 => 313,  633 => 312,  629 => 311,  625 => 310,  615 => 303,  607 => 298,  599 => 293,  589 => 286,  575 => 275,  562 => 265,  558 => 264,  544 => 253,  540 => 252,  536 => 250,  533 => 249,  531 => 248,  521 => 241,  508 => 231,  493 => 219,  489 => 218,  479 => 211,  475 => 210,  470 => 207,  463 => 202,  457 => 199,  452 => 198,  450 => 197,  445 => 194,  440 => 193,  426 => 182,  422 => 181,  414 => 176,  410 => 175,  406 => 174,  396 => 166,  390 => 165,  383 => 163,  375 => 161,  367 => 159,  364 => 158,  355 => 157,  351 => 156,  347 => 155,  342 => 154,  338 => 153,  335 => 152,  327 => 150,  317 => 149,  309 => 147,  307 => 146,  303 => 145,  299 => 144,  294 => 143,  290 => 142,  281 => 135,  273 => 131,  271 => 130,  265 => 127,  238 => 103,  219 => 87,  200 => 71,  181 => 55,  170 => 46,  159 => 41,  154 => 38,  150 => 37,  147 => 36,  136 => 31,  131 => 28,  127 => 27,  117 => 20,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Produits - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i>Catalogue des Produits
            </h1>
            <p class=\"text-muted mb-0\">Gérez votre inventaire et catalogue</p>
        </div>
        <div class=\"d-flex gap-2\">
            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-2\"></i> Scanner
            </button>
            <a href=\"{{ path('app_admin_product_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-2\"></i> Nouveau
            </a>
        </div>
    </div>

    <!-- Flash Messages -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-check-circle me-2\"></i>
                <span>{{ message }}</span>
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-exclamation-circle me-2\"></i>
                <span>{{ message }}</span>
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        </div>
    {% endfor %}

    <!-- Stats Cards -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Total Produits</h6>
                            <h3 class=\"mb-0 fw-bold\">{{ totalItems }}</h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-box fa-lg text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Actifs</h6>
                            <h3 class=\"mb-0 fw-bold\">{{ products|filter(p => p.isActive)|length }}</h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-check-circle fa-lg text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Stock Faible</h6>
                            <h3 class=\"mb-0 fw-bold\">{{ products|filter(p => p.minQuantity > 0 and p.stockQuantity <= p.minQuantity)|length }}</h3>
                        </div>
                        <div class=\"bg-warning bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-exclamation-triangle fa-lg text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Périssables</h6>
                            <h3 class=\"mb-0 fw-bold\">{{ products|filter(p => p.hasExpiryDate)|length }}</h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-calendar-alt fa-lg text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search and Filters -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3 align-items-center\">
                    <!-- Recherche -->
                    <div class=\"col-md-4\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-transparent border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" 
                                   name=\"search\" 
                                   value=\"{{ search }}\" 
                                   class=\"form-control border-start-0\" 
                                   placeholder=\"Rechercher un produit...\">
                            {% if search %}
                                <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fas fa-times\"></i>
                                </a>
                            {% endif %}
                        </div>
                    </div>
                    
                    <!-- Sélection de catégorie hiérarchique -->
                    <div class=\"col-md-4\">
                        <select name=\"category\" class=\"form-select\" id=\"category-select\">
                            <option value=\"0\">Toutes les catégories</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" 
                                        {{ selectedCategory == category.id ? 'selected' : '' }}
                                        class=\"{{ category.isParent ? 'fw-bold' : '' }}\">
                                    {% if category.isParent %}
                                        📁 {{ category.name }} ({{ category.productCount }})
                                    {% else %}
                                        {% for i in 1..category.level %}&nbsp;&nbsp;&nbsp;{% endfor %}
                                        📄 {{ category.name }} ({{ category.productCount }})
                                    {% endif %}
                                </option>
                                {% for child in category.children %}
                                    <option value=\"{{ child.id }}\" 
                                            {{ selectedCategory == child.id ? 'selected' : '' }}
                                            class=\"ms-3 {{ child.isParent ? 'fw-bold' : '' }}\">
                                        {% for i in 1..child.level %}&nbsp;&nbsp;&nbsp;{% endfor %}
                                        {% if child.isParent %}
                                            📂 {{ child.name }} ({{ child.productCount }})
                                        {% else %}
                                            📄 {{ child.name }} ({{ child.productCount }})
                                        {% endif %}
                                    </option>
                                {% endfor %}
                            {% endfor %}
                        </select>
                    </div>
                    
                    <!-- Filtres de statut -->
                    <div class=\"col-md-4\">
                        <div class=\"d-flex flex-wrap gap-2\">
                            <select name=\"status\" class=\"form-select w-auto\" onchange=\"document.getElementById('filter-form').submit()\">
                                <option value=\"\">Tous les statuts</option>
                                <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>Actifs</option>
                                <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                                <option value=\"low-stock\" {{ selectedStatus == 'low-stock' ? 'selected' : '' }}>Stock faible</option>
                            </select>
                            
                            <select name=\"expiry_type\" class=\"form-select w-auto\" onchange=\"document.getElementById('filter-form').submit()\">
                                <option value=\"\">Tous les types</option>
                                <option value=\"perishable\" {{ selectedExpiryType == 'perishable' ? 'selected' : '' }}>Périssables</option>
                                <option value=\"non-perishable\" {{ selectedExpiryType == 'non-perishable' ? 'selected' : '' }}>Non périssables</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Products Grid -->
    <div class=\"row g-3\">
        {% for product in products %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100 product-card\">
                <div class=\"position-relative overflow-hidden\" style=\"height: 180px;\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                            alt=\"{{ product.name }}\" 
                            class=\"w-100 h-100 object-fit-cover\">
                    {% else %}
                        <div class=\"w-100 h-100 d-flex flex-column align-items-center justify-content-center bg-light text-muted\">
                            <i class=\"fas fa-box fa-3x mb-2\"></i>
                            <small>Pas d'image</small>
                        </div>
                    {% endif %}
                    
                    <!-- Status Badge -->
                    <div class=\"position-absolute top-0 start-0 m-2\">
                        <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }}\">
                            {{ product.isActive ? 'Actif' : 'Inactif' }}
                        </span>
                    </div>
                </div>

                <!-- Product Info -->
                <div class=\"card-body py-2\">
                    <h2 class=\"card-title mb-2 fw-bold text-center text-truncate\" title=\"{{ product.name }}\">
                        {{ product.name }}
                    </h2>

                    <div class=\"mb-2\">
                        <!-- Prix -->
                        <div class=\"row mb-2 g-1\">
                            <div class=\"col-6\">
                                <div class=\"text-primary\">
                                    <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-arrow-down me-1\"></i>Achat
                                    </small>
                                    <div class=\"fw-bold\" style=\"font-size: 0.95rem;\">
                                        {{ product.purchasePrice|number_format(0, ',', ' ') }} FCFA
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"text-success text-end\">
                                    <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">
                                        <i class=\"fas fa-arrow-up me-1\"></i>Vente
                                    </small>
                                    <div class=\"fw-bold\" style=\"font-size: 0.95rem;\">
                                        {{ product.salePrice|number_format(0, ',', ' ') }} FCFA
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Marge -->
                        {% set margin = product.salePrice - product.purchasePrice %}
                        {% set marginPercentage = product.purchasePrice > 0 ? (margin / product.purchasePrice * 100)|round(1) : 0 %}
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <small class=\"text-muted\" style=\"font-size: 0.75rem;\">Marge</small>
                            <span class=\"badge {{ marginPercentage >= 30 ? 'bg-success' : (marginPercentage >= 15 ? 'bg-warning text-dark' : 'bg-danger') }} py-1\" style=\"font-size: 0.7rem;\">
                                {{ marginPercentage }}%
                            </span>
                        </div>
                        
                        <!-- Stock -->
                        <div class=\"row mb-2 g-1\">
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fas fa-box text-primary me-1\" style=\"font-size: 0.85rem;\"></i>
                                    <div>
                                        <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">Stock restant</small>
                                        <div class=\"fw-bold {{ product.stockQuantity <= 0 ? 'text-danger' : (product.minQuantity > 0 and product.stockQuantity <= product.minQuantity ? 'text-warning' : 'text-success') }}\" style=\"font-size: 0.9rem;\">
                                            {{ product.stockQuantity }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"d-flex align-items-center justify-content-end\">
                                    <div class=\"text-end\">
                                        <small class=\"text-muted d-block\" style=\"font-size: 0.75rem;\">Stock min</small>
                                        <div class=\"fw-bold\" style=\"font-size: 0.9rem;\">
                                            {{ product.minQuantity }}
                                        </div>
                                    </div>
                                    <i class=\"fas fa-exclamation-circle text-warning ms-1\" style=\"font-size: 0.85rem;\"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Code-barres (CENTRÉ et remplace la catégorie) -->
                        <div class=\"mb-2 text-center\">
                            <div class=\"text-truncate\" style=\"font-family: 'Courier New', monospace; font-size: 0.8rem; background-color: #f8f9fa; padding: 4px 8px; border-radius: 4px;\">
                                <i class=\"fas fa-barcode me-1 text-muted\" style=\"font-size: 0.85rem;\"></i>{{ product.barcode }}
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class=\"d-flex justify-content-between gap-1 mt-2\">
                        <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" 
                        class=\"btn btn-sm btn-outline-secondary flex-fill py-1\" title=\"Voir détails\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                        class=\"btn btn-sm btn-outline-info flex-fill py-1\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i>
                        </a>
                        
                        <a href=\"{{ path('app_admin_product_edit', {'id': product.id}) }}\" 
                        class=\"btn btn-sm btn-outline-warning flex-fill py-1\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-success flex-fill py-1 toggle-status-btn\"
                                data-product-id=\"{{ product.id }}\"
                                data-product-name=\"{{ product.name }}\"
                                data-is-active=\"{{ product.isActive ? '1' : '0' }}\"
                                title=\"{{ product.isActive ? 'Désactiver' : 'Activer' }}\">
                            <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                        </button>
                        
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-danger flex-fill py-1 delete-product-btn\"
                                data-product-id=\"{{ product.id }}\"
                                data-product-name=\"{{ product.name }}\"
                                {% if product.purchaseItems|length > 0 or product.stockBatches|length > 0 %}disabled title=\"Impossible de supprimer\"{% else %}title=\"Supprimer\"{% endif %}>
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted mb-3\">Aucun produit trouvé</h4>
                    {% if search or selectedCategory > 0 or selectedStatus or selectedExpiryType %}
                        <p class=\"text-muted mb-3\">
                            {% if search %}Aucun résultat pour \"{{ search }}\"<br>{% endif %}
                            {% if selectedCategory > 0 %}Catégorie sélectionnée<br>{% endif %}
                            {% if selectedStatus %}Filtre de statut appliqué<br>{% endif %}
                            {% if selectedExpiryType %}Filtre de type appliqué{% endif %}
                        </p>
                        <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-primary\">
                            Effacer tous les filtres
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_admin_product_new') }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-2\"></i> Créer votre premier produit
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <div class=\"d-flex justify-content-center mt-4\">
        <nav aria-label=\"Page navigation\">
            <ul class=\"pagination\">
                {% if currentPage > 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_product_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                            <i class=\"fas fa-chevron-left\"></i>
                        </a>
                    </li>
                {% endif %}

                {% for page in 1..totalPages %}
                    {% if page == currentPage %}
                        <li class=\"page-item active\">
                            <span class=\"page-link\">{{ page }}</span>
                        </li>
                    {% elseif page >= currentPage - 2 and page <= currentPage + 2 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_product_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if currentPage < totalPages %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_product_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                            <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </nav>
    </div>
    <div class=\"text-center text-muted small mt-2\">
        Page {{ currentPage }} sur {{ totalPages }} • {{ totalItems }} produits
    </div>
    {% endif %}
</div>

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Rechercher par code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Code-barres :</label>
                    <input type=\"text\" 
                           id=\"barcode-input\" 
                           class=\"form-control form-control-lg text-center\"
                           placeholder=\"Saisissez ou scannez...\"
                           autofocus
                           style=\"letter-spacing: 2px; font-family: 'Courier New', monospace;\">
                    <div class=\"form-text\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Tapez directement ou utilisez votre scanner USB
                    </div>
                </div>

                <div class=\"alert d-none\" id=\"scan-result\">
                    <div id=\"scan-result-content\"></div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"button\" class=\"btn btn-primary d-none\" id=\"use-barcode-btn\">
                    <i class=\"fas fa-arrow-right me-1\"></i> Aller au produit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toggle Status Modal - CORRIGÉ -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
                <!-- Token CSRF caché - CORRECTION -->
                <input type=\"hidden\" id=\"modalCsrfToken\" value=\"{{ csrf_token('toggle-status') }}\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <!-- Le token sera ajouté dynamiquement par JavaScript -->
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal - CORRIGÉ -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
                <!-- Token CSRF caché - CORRECTION -->
                <input type=\"hidden\" id=\"modalDeleteCsrfToken\" value=\"{{ csrf_token('delete') }}\">
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <!-- Le token sera ajouté dynamiquement par JavaScript -->
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
.product-card {
    transition: all 0.3s ease;
    border: 1px solid transparent;
    height: 100%;
}

.product-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    border-color: #dee2e6;
}

.object-fit-cover {
    object-fit: cover;
}

.page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.badge {
    font-size: 0.7em;
    font-weight: 500;
    padding: 0.25em 0.5em;
}

/* Style pour les options de catégorie */
#category-select option.fw-bold {
    font-weight: bold !important;
    background-color: #f8f9fa;
}

#category-select option {
    padding: 6px 10px;
}

/* Style pour les catégories enfants */
#category-select option[class*=\"ms-\"] {
    padding-left: 25px;
}

/* Ajustement des boutons */
.product-card .btn-sm {
    padding: 0.2rem 0.4rem;
    font-size: 0.8rem;
    min-width: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .card-body {
        padding: 0.6rem;
    }
    
    .form-select.w-auto {
        width: 100% !important;
        margin-bottom: 0.5rem;
    }
    
    .product-card {
        margin-bottom: 1rem;
    }
}

/* Style compact pour le contenu */
.product-card .card-title {
    font-size: 0.95rem;
    line-height: 1.2;
    margin-bottom: 0.5rem;
}

.product-card .text-muted {
    font-size: 0.75rem;
}

.product-card .fw-bold {
    font-size: 0.9rem;
}

/* Hauteur fixe pour les cartes */
.product-card > .card-body {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

/* Style pour les badges de statut */
.badge.bg-success {
    background-color: #198754 !important;
}

.badge.bg-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.badge.bg-danger {
    background-color: #dc3545 !important;
}

/* Animation pour highlight */
@keyframes highlight {
    0% { background-color: transparent; }
    50% { background-color: rgba(13, 110, 253, 0.1); }
    100% { background-color: transparent; }
}

.highlight-product {
    animation: highlight 1s ease 2;
}
</style>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scanner Modal
    const scanBtn = document.getElementById('scan-barcode-btn');
    const scannerModal = new bootstrap.Modal(document.getElementById('scannerModal'));
    const barcodeInput = document.getElementById('barcode-input');
    const useBarcodeBtn = document.getElementById('use-barcode-btn');
    const scanResult = document.getElementById('scan-result');
    const scanResultContent = document.getElementById('scan-result-content');
    
    let currentBarcode = '';
    let currentProduct = null;

    scanBtn.addEventListener('click', function() {
        scannerModal.show();
        barcodeInput.focus();
        resetScanner();
    });

    scannerModal._element.addEventListener('shown.bs.modal', function() {
        barcodeInput.focus();
    });

    barcodeInput.addEventListener('input', function(e) {
        currentBarcode = this.value.trim();
        if (currentBarcode.length >= 3) {
            checkBarcode(currentBarcode);
        } else {
            resetScanner();
        }
    });

    barcodeInput.addEventListener('keydown', function(e) {
        if ((e.key === 'Enter' || e.key === 'Tab') && currentBarcode) {
            e.preventDefault();
            checkBarcode(currentBarcode);
        }
    });

    useBarcodeBtn.addEventListener('click', function() {
        if (currentProduct) {
            highlightProduct(currentProduct.id);
            scannerModal.hide();
            
            const productCard = document.querySelector(`[data-product-id=\"\${currentProduct.id}\"]`).closest('.product-card');
            if (productCard) {
                productCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        } else if (currentBarcode) {
            window.location.href = `/admin/product/new?barcode=\${encodeURIComponent(currentBarcode)}`;
        }
    });

    function checkBarcode(barcode) {
        scanResult.classList.remove('d-none', 'alert-success', 'alert-warning', 'alert-danger');
        scanResult.classList.add('alert-info');
        scanResultContent.innerHTML = `
            <div class=\"d-flex align-items-center\">
                <i class=\"fas fa-spinner fa-spin me-2\"></i>
                <span>Vérification en cours...</span>
            </div>
        `;
        useBarcodeBtn.classList.add('d-none');

        fetch(`/admin/product/check/barcode/\${encodeURIComponent(barcode)}`)
            .then(response => {
                if (!response.ok) throw new Error('Erreur réseau');
                return response.json();
            })
            .then(data => {
                currentProduct = data.product;
                
                if (data.exists) {
                    scanResult.classList.remove('alert-info');
                    scanResult.classList.add('alert-success');
                    scanResultContent.innerHTML = `
                        <div>
                            <h6 class=\"mb-2\"><i class=\"fas fa-check-circle me-2\"></i>Produit trouvé !</h6>
                            <div class=\"mb-2\" style=\"font-size: 0.9rem;\">
                                <strong>Nom :</strong> \${data.product.name}<br>
                                <strong>Prix vente :</strong> \${parseInt(data.product.salePrice).toLocaleString('fr-FR')} XAF<br>
                                <strong>Stock :</strong> \${data.product.stockQuantity} unités<br>
                                <strong>Type :</strong> \${data.product.hasExpiryDate ? 'Périssable' : 'Non périssable'}
                            </div>
                            <small class=\"text-muted\">Le produit sera mis en évidence dans la liste</small>
                        </div>
                    `;
                    useBarcodeBtn.classList.remove('d-none');
                    useBarcodeBtn.innerHTML = '<i class=\"fas fa-eye me-1\"></i> Voir dans la liste';
                } else {
                    scanResult.classList.remove('alert-info');
                    scanResult.classList.add('alert-warning');
                    scanResultContent.innerHTML = `
                        <div>
                            <h6 class=\"mb-2\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Produit non trouvé</h6>
                            <p class=\"mb-0\">Ce code-barres n'existe pas dans la base.</p>
                        </div>
                    `;
                    useBarcodeBtn.classList.remove('d-none');
                    useBarcodeBtn.innerHTML = '<i class=\"fas fa-plus me-1\"></i> Créer un produit';
                }
            })
            .catch(error => {
                scanResult.classList.remove('alert-info');
                scanResult.classList.add('alert-danger');
                scanResultContent.innerHTML = `
                    <div>
                        <h6 class=\"mb-2\"><i class=\"fas fa-times-circle me-2\"></i>Erreur</h6>
                        <p class=\"mb-0\">Impossible de vérifier le code-barres.</p>
                    </div>
                `;
                console.error('Erreur:', error);
            });
    }

    function resetScanner() {
        scanResult.classList.add('d-none');
        useBarcodeBtn.classList.add('d-none');
        currentProduct = null;
        scanResultContent.innerHTML = '';
    }

    function highlightProduct(productId) {
        document.querySelectorAll('.product-card').forEach(card => {
            card.classList.remove('border-primary', 'border-3', 'highlight-product');
            card.style.boxShadow = '';
        });
        
        const productCard = document.querySelector(`[data-product-id=\"\${productId}\"]`)?.closest('.product-card');
        if (productCard) {
            productCard.classList.add('border-primary', 'border-3', 'highlight-product');
            productCard.style.boxShadow = '0 0 20px rgba(13, 110, 253, 0.25)';
        }
    }

    // Toggle Status with Modal Confirmation - CORRIGÉ
    const toggleStatusModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleStatusTitle = document.getElementById('toggleStatusTitle');
    const toggleStatusMessage = document.getElementById('toggleStatusMessage');
    const toggleStatusForm = document.getElementById('toggleStatusForm');
    const toggleStatusToken = document.getElementById('toggleStatusToken');
    const toggleStatusBtn = document.getElementById('toggleStatusBtn');
    const modalCsrfToken = document.getElementById('modalCsrfToken');

    document.querySelectorAll('.toggle-status-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            
            toggleStatusTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleStatusMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le produit \"\${productName}\" ?`;
            
            // CORRECTION : Utiliser la route correcte
            toggleStatusForm.action = `/admin/product/\${productId}/toggle-status`;
            
            // CORRECTION : Utiliser le token du modal
            toggleStatusToken.value = modalCsrfToken.value;
            
            toggleStatusBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleStatusBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            
            toggleStatusModal.show();
        });
    });

    // Delete with Modal Confirmation - CORRIGÉ
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const modalDeleteCsrfToken = document.getElementById('modalDeleteCsrfToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\" style=\"font-size: 0.9rem;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p style=\"font-size: 0.95rem;\">Êtes-vous sûr de vouloir supprimer le produit <strong>\"\${productName}\"</strong> ?</p>
            `;
            
            // CORRECTION : Utiliser la route correcte
            deleteForm.action = `/admin/product/\${productId}`;
            
            // CORRECTION : Utiliser le token du modal
            deleteToken.value = modalDeleteCsrfToken.value;
            
            deleteModal.show();
        });
    });

    // Auto-submit category filter
    const categorySelect = document.getElementById('category-select');
    categorySelect.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });

    // Auto-submit search filter
    const searchInput = document.querySelector('input[name=\"search\"]');
    let searchTimeout;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            if (this.value.length >= 2 || this.value.length === 0) {
                this.closest('form').submit();
            }
        }, 500);
    });

    // Add tooltips
    const tooltipTriggerList = document.querySelectorAll('[title]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
{% endblock %}", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
