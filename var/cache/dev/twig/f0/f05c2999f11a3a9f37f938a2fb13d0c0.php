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
class __TwigTemplate_3e50e4b34e77e385581dd457e988a154 extends Template
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
    <!-- Header avec quota -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i>Catalogue des Produits
            </h1>
            <p class=\"text-muted mb-0\">Gérez votre inventaire et catalogue</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">Produits actifs</small>
                        <h5 class=\"mb-0 ";
        // line 28
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\">
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 29, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 30
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 30, $this->source); })()) == "Illimité")) {
            // line 31
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 33
        yield "                        </h5>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-2\"></i> Scanner
            </button>

            <a href=\"#\" id=\"newProductBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Produit
            </a>
        </div>
    </div>

    ";
        // line 49
        yield "    ";
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 54, $this->source); })()), "html", null, true);
            yield " produits actifs.
            </div>
            <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 63
        yield "
    <!-- Statistiques filtrées -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-box fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Stock faible</span>
                                <h3 class=\"mb-0\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lowStockFiltered"]) || array_key_exists("lowStockFiltered", $context) ? $context["lowStockFiltered"] : (function () { throw new RuntimeError('Variable "lowStockFiltered" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Périssables</span>
                                <h3 class=\"mb-0\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["perishableFiltered"]) || array_key_exists("perishableFiltered", $context) ? $context["perishableFiltered"] : (function () { throw new RuntimeError('Variable "perishableFiltered" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Non périssables</span>
                                <h3 class=\"mb-0\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonPerishableFiltered"]) || array_key_exists("nonPerishableFiltered", $context) ? $context["nonPerishableFiltered"] : (function () { throw new RuntimeError('Variable "nonPerishableFiltered" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-check fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "\" 
                           class=\"form-control\" placeholder=\"Nom, code-barres...\">
                </div>
                <div class=\"col-md-3\">
                    <label for=\"category\" class=\"form-label fw-bold\">Catégorie</label>
                    <select name=\"category\" id=\"category\" class=\"form-select\">
                        <option value=\"0\">Toutes les catégories</option>
                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 155
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 155, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 155))) ? ("selected") : (""));
            yield "
                                    class=\"";
            // line 156
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isParent", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold") : (""));
            yield "\">
                                ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 157)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 158), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 158), "html", null, true);
            yield ")
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 167
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 167, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 168
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 168, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        <option value=\"low-stock\" ";
        // line 169
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 169, $this->source); })()) == "low-stock")) ? ("selected") : (""));
        yield ">Stock faible</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"expiry_type\" class=\"form-label fw-bold\">Type</label>
                    <select name=\"expiry_type\" id=\"expiry_type\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"perishable\" ";
        // line 176
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 176, $this->source); })()) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                        <option value=\"non-perishable\" ";
        // line 177
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 177, $this->source); })()) == "non-perishable")) ? ("selected") : (""));
        yield ">Non périssables</option>
                    </select>
                </div>
                <div class=\"col-md-2 d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille de produits -->
    <div class=\"row g-3\">
        ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 194, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 195
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container\">
                    ";
            // line 198
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 198) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 198) != "default-product.png"))) {
                // line 199
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 199))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 200), "html", null, true);
                yield "\" 
                             class=\"card-img-top product-image\">
                    ";
            } else {
                // line 203
                yield "                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 207
            yield "                    <div class=\"product-status-badge\">
                        <span class=\"badge ";
            // line 208
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                            ";
            // line 209
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                        </span>
                    </div>
                </div>

                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title text-truncate\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 215), "html", null, true);
            yield "</h5>
                    <p class=\"text-muted small mb-2\">
                        <i class=\"fas fa-barcode me-1\"></i>";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 217), "html", null, true);
            yield "
                    </p>

                    <!-- Prix et unité -->
                    <div class=\"d-flex justify-content-between align-items-center mb-2\">
                        <span class=\"fw-bold text-primary\">
                            ";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 223), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 223)), "html", null, true);
            yield "
                        </span>
                        <span class=\"badge bg-light text-dark\">
                            <i class=\"fas fa-weight-hanging me-1\"></i>";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 226)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 226), "pièce")) : ("pièce")), "html", null, true);
            yield "
                        </span>
                    </div>

                    <!-- Stock -->
                    <div class=\"d-flex align-items-center mb-2\">
                        <i class=\"fas fa-box me-1 text-muted\"></i>
                        <span class=\"fw-bold me-2\">";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 233), "html", null, true);
            yield "</span>
                        <span class=\"text-muted\">/ min ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 234), "html", null, true);
            yield "</span>
                        ";
            // line 235
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isLowStock", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 236
                yield "                            <span class=\"badge bg-warning text-dark ms-auto\">Stock faible</span>
                        ";
            }
            // line 238
            yield "                    </div>

                    <!-- Informations supplémentaires (pharmacie) -->
                    ";
            // line 241
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 241) || CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 241))) {
                // line 242
                yield "                        <div class=\"small text-muted mb-2\">
                            ";
                // line 243
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 243), "html", null, true);
                    yield "</span>";
                }
                // line 244
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span><i class=\"fas fa-pills me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 244), "html", null, true);
                    yield "</span>";
                }
                // line 245
                yield "                        </div>
                    ";
            }
            // line 247
            yield "
                    <!-- Boutons d'action -->
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 250)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-secondary flex-fill\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 254)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots\">
                            <i class=\"fas fa-boxes\"></i>
                        </a>
                        <a href=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-success flex-fill toggle-status-btn\"
                                data-product-id=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 264), "html", null, true);
            yield "\"
                                data-product-name=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 265), "html", null, true);
            yield "\"
                                data-is-active=\"";
            // line 266
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                data-token=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle-status"), "html", null, true);
            yield "\"
                                title=\"";
            // line 268
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                            <i class=\"fas ";
            // line 269
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 269)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
                        </button>
                        ";
            // line 271
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-product-btn\"
                                    data-product-id=\"";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 274), "html", null, true);
                yield "\"
                                    data-product-name=\"";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 275), "html", null, true);
                yield "\"
                                    data-token=\"";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
                yield "\"
                                    ";
                // line 277
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchaseItems", [], "any", false, false, false, 277)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 277)) > 0))) {
                    yield "disabled";
                }
                // line 278
                yield "                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 282
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 286
        if (!$context['_iterated']) {
            // line 287
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"";
            // line 292
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 302
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 302, $this->source); })()) > 1)) {
            // line 303
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 305, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 306
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 306, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 307, $this->source); })()), "request", [], "any", false, false, false, 307), "query", [], "any", false, false, false, 307), "all", [], "any", false, false, false, 307), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "        </ul>
    </nav>
    ";
        }
        // line 313
        yield "</div>

<!-- Modale quota atteint pour nouveau produit -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de ";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 327, $this->source); })()), "html", null, true);
        yield " produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 331
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour toggle et suppression (similaires aux catégories) -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

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
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
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

    // line 386
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

        // line 387
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.product-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.product-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
}
.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.product-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.product-status-badge {
    position: absolute;
    top: 8px;
    right: 8px;
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 432
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

        // line 433
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau produit avec vérification quota
    const newProductBtn = document.getElementById('newProductBtn');
    if (newProductBtn) {
        newProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 441
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 441, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 442
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 444
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\";
            ";
        }
        // line 446
        yield "        });
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleTitle = document.getElementById('toggleStatusTitle');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleBtn = document.getElementById('toggleStatusBtn');

    document.querySelectorAll('.toggle-status-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            toggleTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} \"\${productName}\" ?`;
            toggleForm.action = `/admin/product/\${productId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer <strong>\"\${productName}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = this.dataset.token;
            deleteModal.show();
        });
    });

    // Auto-submit filters
    document.getElementById('category').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('status').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('expiry_type').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
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
        return array (  840 => 446,  834 => 444,  830 => 442,  828 => 441,  817 => 433,  804 => 432,  749 => 387,  736 => 386,  671 => 331,  664 => 327,  648 => 313,  643 => 310,  632 => 307,  627 => 306,  623 => 305,  619 => 303,  617 => 302,  612 => 299,  599 => 292,  592 => 287,  590 => 286,  582 => 282,  576 => 278,  572 => 277,  568 => 276,  564 => 275,  560 => 274,  556 => 272,  554 => 271,  549 => 269,  545 => 268,  541 => 267,  537 => 266,  533 => 265,  529 => 264,  520 => 258,  513 => 254,  506 => 250,  501 => 247,  497 => 245,  490 => 244,  484 => 243,  481 => 242,  479 => 241,  474 => 238,  470 => 236,  468 => 235,  464 => 234,  460 => 233,  450 => 226,  444 => 223,  435 => 217,  430 => 215,  421 => 209,  417 => 208,  414 => 207,  408 => 203,  402 => 200,  397 => 199,  395 => 198,  390 => 195,  385 => 194,  372 => 184,  362 => 177,  358 => 176,  348 => 169,  344 => 168,  340 => 167,  332 => 161,  320 => 158,  311 => 157,  307 => 156,  300 => 155,  296 => 154,  286 => 147,  267 => 131,  253 => 120,  239 => 109,  225 => 98,  211 => 87,  197 => 76,  182 => 63,  172 => 56,  167 => 54,  161 => 50,  158 => 49,  141 => 33,  137 => 31,  135 => 30,  129 => 29,  125 => 28,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Produits - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header avec quota -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i>Catalogue des Produits
            </h1>
            <p class=\"text-muted mb-0\">Gérez votre inventaire et catalogue</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">Produits actifs</small>
                        <h5 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }}\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            {% endif %}
                        </h5>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-2\"></i> Scanner
            </button>

            <a href=\"#\" id=\"newProductBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Produit
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} produits actifs.
            </div>
            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}

    <!-- Statistiques filtrées -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-box fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Stock faible</span>
                                <h3 class=\"mb-0\">{{ lowStockFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Périssables</span>
                                <h3 class=\"mb-0\">{{ perishableFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Non périssables</span>
                                <h3 class=\"mb-0\">{{ nonPerishableFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-calendar-check fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                           class=\"form-control\" placeholder=\"Nom, code-barres...\">
                </div>
                <div class=\"col-md-3\">
                    <label for=\"category\" class=\"form-label fw-bold\">Catégorie</label>
                    <select name=\"category\" id=\"category\" class=\"form-select\">
                        <option value=\"0\">Toutes les catégories</option>
                        {% for category in categories %}
                            <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}
                                    class=\"{{ category.isParent ? 'fw-bold' : '' }}\">
                                {% for i in 0..category.level %}&nbsp;&nbsp;{% endfor %}
                                {{ category.name }} ({{ category.productCount }})
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>Actifs</option>
                        <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                        <option value=\"low-stock\" {{ selectedStatus == 'low-stock' ? 'selected' : '' }}>Stock faible</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"expiry_type\" class=\"form-label fw-bold\">Type</label>
                    <select name=\"expiry_type\" id=\"expiry_type\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"perishable\" {{ selectedExpiryType == 'perishable' ? 'selected' : '' }}>Périssables</option>
                        <option value=\"non-perishable\" {{ selectedExpiryType == 'non-perishable' ? 'selected' : '' }}>Non périssables</option>
                    </select>
                </div>
                <div class=\"col-md-2 d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille de produits -->
    <div class=\"row g-3\">
        {% for product in products %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                             alt=\"{{ product.name }}\" 
                             class=\"card-img-top product-image\">
                    {% else %}
                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    {% endif %}
                    <div class=\"product-status-badge\">
                        <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }}\">
                            {{ product.isActive ? 'Actif' : 'Inactif' }}
                        </span>
                    </div>
                </div>

                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title text-truncate\">{{ product.name }}</h5>
                    <p class=\"text-muted small mb-2\">
                        <i class=\"fas fa-barcode me-1\"></i>{{ product.barcode }}
                    </p>

                    <!-- Prix et unité -->
                    <div class=\"d-flex justify-content-between align-items-center mb-2\">
                        <span class=\"fw-bold text-primary\">
                            {{ product.salePrice|price_with_currency(product.hmaService) }}
                        </span>
                        <span class=\"badge bg-light text-dark\">
                            <i class=\"fas fa-weight-hanging me-1\"></i>{{ product.unit|default('pièce') }}
                        </span>
                    </div>

                    <!-- Stock -->
                    <div class=\"d-flex align-items-center mb-2\">
                        <i class=\"fas fa-box me-1 text-muted\"></i>
                        <span class=\"fw-bold me-2\">{{ product.stockQuantity }}</span>
                        <span class=\"text-muted\">/ min {{ product.minQuantity }}</span>
                        {% if product.isLowStock %}
                            <span class=\"badge bg-warning text-dark ms-auto\">Stock faible</span>
                        {% endif %}
                    </div>

                    <!-- Informations supplémentaires (pharmacie) -->
                    {% if product.dosage or product.form %}
                        <div class=\"small text-muted mb-2\">
                            {% if product.dosage %}<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>{{ product.dosage }}</span>{% endif %}
                            {% if product.form %}<span><i class=\"fas fa-pills me-1\"></i>{{ product.form }}</span>{% endif %}
                        </div>
                    {% endif %}

                    <!-- Boutons d'action -->
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" 
                           class=\"btn btn-sm btn-outline-secondary flex-fill\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots\">
                            <i class=\"fas fa-boxes\"></i>
                        </a>
                        <a href=\"{{ path('app_admin_product_edit', {'id': product.id}) }}\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <button type=\"button\" 
                                class=\"btn btn-sm btn-outline-success flex-fill toggle-status-btn\"
                                data-product-id=\"{{ product.id }}\"
                                data-product-name=\"{{ product.name }}\"
                                data-is-active=\"{{ product.isActive ? '1' : '0' }}\"
                                data-token=\"{{ csrf_token('toggle-status') }}\"
                                title=\"{{ product.isActive ? 'Désactiver' : 'Activer' }}\">
                            <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                        </button>
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-product-btn\"
                                    data-product-id=\"{{ product.id }}\"
                                    data-product-name=\"{{ product.name }}\"
                                    data-token=\"{{ csrf_token('delete') }}\"
                                    {% if product.purchaseItems|length > 0 or product.stockBatches|length > 0 %}disabled{% endif %}
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"{{ path('app_admin_product_new') }}\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            {% for page in 1..totalPages %}
                <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_product_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
</div>

<!-- Modale quota atteint pour nouveau produit -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de {{ quota }} produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour toggle et suppression (similaires aux catégories) -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

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
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.product-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.product-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
}
.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.product-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.product-status-badge {
    position: absolute;
    top: 8px;
    right: 8px;
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau produit avec vérification quota
    const newProductBtn = document.getElementById('newProductBtn');
    if (newProductBtn) {
        newProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_product_new') }}\";
            {% endif %}
        });
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleTitle = document.getElementById('toggleStatusTitle');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleBtn = document.getElementById('toggleStatusBtn');

    document.querySelectorAll('.toggle-status-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            toggleTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} \"\${productName}\" ?`;
            toggleForm.action = `/admin/product/\${productId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer <strong>\"\${productName}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = this.dataset.token;
            deleteModal.show();
        });
    });

    // Auto-submit filters
    document.getElementById('category').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('status').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('expiry_type').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
});
</script>
{% endblock %}", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
