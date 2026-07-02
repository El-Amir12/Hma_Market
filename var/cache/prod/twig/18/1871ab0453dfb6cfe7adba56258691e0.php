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

/* admin/product/show.html.twig */
class __TwigTemplate_d8312fc91de38770df48072d8ba01b7c extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails du produit";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 19)), "truncate", [30, "..."], "method", false, false, false, 19), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-box me-2\"></i> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "
                </h1>
            </div>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-box fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Stats rapides -->
    <div class=\"row mb-4\">
        <!-- Carte 1 : Stock actuel (toujours visible) -->
        <div class=\"";
        // line 41
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Stock actuel</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 48), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 48), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-boxes fa-lg text-white\"></i>
                        </div>
                    </div>
                    ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 55) > 0)) {
            // line 56
            yield "                        <small class=\"text-white-50\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Seuil d'alerte: ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 58), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 58), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                        </small>
                    ";
        }
        // line 61
        yield "                </div>
            </div>
        </div>
        
        <!-- Carte 2 : Valeur stock (basée sur les lots réels) -->
        <div class=\"";
        // line 66
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Valeur stock</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
        // line 73
        $context["totalStockValue"] = 0;
        // line 74
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 75
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                                        ";
                $context["totalStockValue"] = (($context["totalStockValue"] ?? null) + (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 76) * CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 76)));
                // line 77
                yield "                                    ";
            }
            // line 78
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["totalStockValue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 79)), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-coins fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calculator me-1\"></i>
                        Basé sur le coût d'achat réel des lots
                        ";
        // line 89
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 90
            yield "                            <span class=\"d-block mt-1\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Calculé à partir des prix d'achat des lots actifs
                            </span>
                        ";
        }
        // line 95
        yield "                    </small>
                </div>
            </div>
        </div>
        
        <!-- Carte 3 : Marge (uniquement pour non restaurant) -->
        ";
        // line 101
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 102
            yield "        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Marge</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
            // line 109
            $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 109) - CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 109));
            // line 110
            yield "                                ";
            $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 110) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["margin"] ?? null) / CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 110)) * 100), 1)) : (0));
            // line 111
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["marginPercentage"] ?? null), "html", null, true);
            yield "%
                            </h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-chart-line fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-arrow-up me-1\"></i>
                        ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["margin"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 120)), "html", null, true);
            yield " par unité
                    </small>
                </div>
            </div>
        </div>
        ";
        }
        // line 126
        yield "        
        <!-- Carte 4 : Statut (toujours visible) -->
        <div class=\"";
        // line 128
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 ";
        // line 129
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Statut</h6>
                            <div>
                                <span class=\"badge ";
        // line 135
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " px-3 py-2\">
                                    ";
        // line 136
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"";
        // line 140
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-25 p-3 rounded\">
                            <i class=\"fas ";
        // line 141
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calendar me-1\"></i>
                        Créé le ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "createdAt", [], "any", false, false, false, 146), "d/m/Y"), "html", null, true);
        yield "
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche: Informations produit -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <!-- Informations produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-info-circle me-2\"></i> Informations du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Nom</dt>
                                <dd class=\"col-sm-7 fw-bold\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 168), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-secondary\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 172), "html", null, true);
        yield "</span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-folder me-1\"></i>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
        yield "
                                    </span>
                                    ";
        // line 180
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 180), "parent", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-level-up-alt me-1\"></i>
                                            Catégorie principale: ";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 184), "parent", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184), "html", null, true);
            yield "
                                        </small>
                                    ";
        }
        // line 187
        yield "                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Unité de mesure</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 191), "pièce")) : ("pièce"))), "html", null, true);
        yield "
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Type de produit</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 196
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "method", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    ";
        } else {
            // line 201
            yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    ";
        }
        // line 205
        yield "                                </dd>
                                
                                ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "                                    <dt class=\"col-sm-5 text-muted\">Dosage</dt>
                                    <dd class=\"col-sm-7\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 209), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 211
        yield "                                
                                ";
        // line 212
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 213
            yield "                                    <dt class=\"col-sm-5 text-muted\">Forme</dt>
                                    <dd class=\"col-sm-7\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 214), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 216
        yield "                                
                                ";
        // line 217
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "prescriptionRequired", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 218
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prescription</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"badge bg-warning text-dark\">Obligatoire</span>
                                    </dd>
                                ";
        }
        // line 223
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Prix d'achat</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-primary fw-bold\">
                                        ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 227), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 227)), "html", null, true);
        yield "
                                    </span>
                                </dd>
                                
                                ";
        // line 231
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 232
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prix de vente</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"text-success fw-bold\">
                                            ";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 235), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 235)), "html", null, true);
            yield "
                                        </span>
                                    </dd>
                                ";
        }
        // line 239
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Stock min.</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 242
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 242) > 0)) {
            // line 243
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 244), "html", null, true);
            yield "
                                        </span>
                                    ";
        } else {
            // line 247
            yield "                                        <span class=\"text-muted\">Non défini</span>
                                    ";
        }
        // line 249
        yield "                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                <!-- Image du produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-image me-2\"></i> Image du produit
                            </h5>
                        </div>
                        <div class=\"card-body d-flex align-items-center justify-content-center\">
                            ";
        // line 264
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 264) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 264) != "default-product.png"))) {
            // line 265
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 265))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 266), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded shadow-lg\"
                                     style=\"max-height: 250px; object-fit: contain;\">
                            ";
        } else {
            // line 270
            yield "                                <div class=\"text-center text-muted py-5\">
                                    <i class=\"fas fa-box fa-5x mb-3\"></i>
                                    <p class=\"mb-0\">Aucune image disponible</p>
                                </div>
                            ";
        }
        // line 275
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Description du produit -->
                ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-align-left me-2\"></i> Description du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"product-description-container\" style=\"max-height: 300px; overflow-y: auto;\">
                                ";
            // line 290
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 290), "html", null, true));
            yield "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 296
        yield "                
                <!-- Timeline des mouvements récents -->
                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-history me-2\"></i> Derniers mouvements de stock
                            </h5>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-exchange-alt me-1\"></i> Voir tous
                            </a>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 309
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 309)) > 0)) {
            // line 310
            yield "                                <div class=\"timeline\">
                                    ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 311), 0, 5), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "createdAt", [], "any", false, false, false, 311) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "createdAt", [], "any", false, false, false, 311)); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 312
                yield "                                        <div class=\"timeline-item ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 312) % 2 != 0)) ? ("timeline-item-left") : ("timeline-item-right"));
                yield "\">
                                            <div class=\"timeline-date\">
                                                ";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 314), "d/m/Y"), "html", null, true);
                yield "
                                            </div>
                                            <div class=\"timeline-content\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div>
                                                        <h6 class=\"mb-1\">Lot ";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 319), "html", null, true);
                yield "</h6>
                                                        <p class=\"mb-0 text-muted small\">
                                                            <i class=\"fas fa-box me-1\"></i>
                                                            Quantité: ";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 322), "html", null, true);
                yield "
                                                            ";
                // line 323
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 324
                    yield "                                                                <span class=\"ms-2\">
                                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                    Exp: ";
                    // line 326
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 326), "d/m/Y"), "html", null, true);
                    yield "
                                                                </span>
                                                            ";
                }
                // line 329
                yield "                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class=\"badge ";
                // line 332
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
                yield "\">
                                                            ";
                // line 333
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                                        </span>
                                                        ";
                // line 335
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 335) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 335) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 336
                    yield "                                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                                        ";
                }
                // line 338
                yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            yield "                                </div>
                                ";
            // line 344
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 344)) > 5)) {
                // line 345
                yield "                                    <div class=\"text-center mt-3\">
                                        <a href=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 346)]), "html", null, true);
                yield "\" 
                                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                                            <i class=\"fas fa-boxes\"></i> Lots
                                        </a>
                                    </div>
                                ";
            }
            // line 352
            yield "                            ";
        } else {
            // line 353
            yield "                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement de stock enregistré</p>
                                </div>
                            ";
        }
        // line 358
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Colonne droite: Actions et lots -->
        <div class=\"col-lg-4\">
            <!-- Actions rapides -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i> Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 375)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier le produit
                        </a>

                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-primary dropdown-toggle w-100\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-print me-2\"></i> Imprimer
                            </button>
                            <ul class=\"dropdown-menu w-100\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_print_barcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 386)]), "html", null, true);
        yield "', '_blank'); return false;\">
                                        <i class=\"fas fa-barcode me-2\"></i> Étiquette code-barres
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_print_sheet", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 391)]), "html", null, true);
        yield "', '_blank'); return false;\">
                                        <i class=\"fas fa-file-alt me-2\"></i> Fiche produit
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <a href=\"";
        // line 398
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" 
                           class=\"btn btn-success\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvel achat
                        </a>
                        
                        <!-- Lien vers les lots -->
                        <a href=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 404)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-outline-info\">
                            <i class=\"fas fa-boxes me-2\"></i> Gérer les lots
                        </a>
                        
                        <!-- Lien vers les mouvements de stock (à créer) -->
                        <a href=\"#\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-exchange-alt me-2\"></i> Voir les mouvements
                        </a>
                        
                        <!-- Lien vers les commandes liées (si pas restaurant) -->
                        ";
        // line 415
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 416
            yield "                        <a href=\"#\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                        </a>
                        ";
        }
        // line 420
        yield "                        
                        ";
        // line 421
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 422
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 422)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags me-1\"></i> Promos
                            </a>
                        ";
        }
        // line 427
        yield "                        
                        <!-- Bouton toggle status (ouvre modal) -->
                        <button type=\"button\" 
                                class=\"btn btn-outline-secondary toggle-status-btn\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#toggleStatusModal\"
                                data-product-id=\"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 433), "html", null, true);
        yield "\"
                                data-product-name=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 434), "html", null, true);
        yield "\"
                                data-is-active=\"";
        // line 435
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\"
                                data-token=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 436))), "html", null, true);
        yield "\">
                            <i class=\"fas ";
        // line 437
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 437)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " me-2\"></i>
                            ";
        // line 438
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver le produit") : ("Activer le produit"));
        yield "
                        </button>
                        
                        <!-- Bouton supprimer (visible pour admin) -->
                        ";
        // line 442
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 443
            yield "                            ";
            $context["hasDependencies"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchaseItems", [], "any", false, false, false, 443)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 443)) > 0));
            // line 444
            yield "                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger delete-product-btn\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#deleteModal\"
                                    data-product-id=\"";
            // line 448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 448), "html", null, true);
            yield "\"
                                    data-product-name=\"";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 449), "html", null, true);
            yield "\"
                                    data-has-dependencies=\"";
            // line 450
            yield (((($tmp = ($context["hasDependencies"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                    data-token=\"";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 451))), "html", null, true);
            yield "\"
                                    ";
            // line 452
            if ((($tmp = ($context["hasDependencies"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "title=\"Ce produit a des dépendances\"";
            }
            yield ">
                                <i class=\"fas fa-trash me-2\"></i> Supprimer le produit
                            </button>
                        ";
        }
        // line 456
        yield "                    </div>
                </div>
            </div>
            
            <!-- Liste des lots actifs -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i> Lots en stock
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 468
        $context["activeBatches"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 468), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "isActive", [], "any", false, false, false, 468) && (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "currentQuantity", [], "any", false, false, false, 468) > 0)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "expiryDate", [], "any", false, false, false, 468) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "expiryDate", [], "any", false, false, false, 468)); });
        // line 469
        yield "                    
                    ";
        // line 470
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)) > 0)) {
            // line 471
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 472
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["activeBatches"] ?? null), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 473
                yield "                                <div class=\"list-group-item border-0 px-0 py-2\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Lot ";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 476), "html", null, true);
                yield "</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-box me-1\"></i>
                                                ";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 479), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 479), "html", null, true);
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            ";
                // line 483
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 483)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 484
                    yield "                                                <div class=\"mb-1\">
                                                    <small class=\"";
                    // line 485
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 485) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) ? ("text-danger") : ("text-muted"));
                    yield "\">
                                                        <i class=\"fas fa-calendar-alt me-1\"></i>
                                                        ";
                    // line 487
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 487), "d/m/Y"), "html", null, true);
                    yield "
                                                    </small>
                                                </div>
                                            ";
                }
                // line 491
                yield "                                            <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 491) <= 10)) ? ("bg-warning") : ("bg-success"));
                yield "\">
                                                ";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 492), "html", null, true);
                yield " restants
                                            </span>
                                        </div>
                                    </div>
                                    ";
                // line 496
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 496) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 496) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
                    // line 497
                    yield "                                        <div class=\"mt-2\">
                                            <div class=\"progress\" style=\"height: 5px;\">
                                                ";
                    // line 499
                    $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 499), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 499), "days", [], "any", false, false, false, 499);
                    // line 500
                    yield "                                                ";
                    $context["progress"] = ((($context["daysLeft"] ?? null) / 30) * 100);
                    // line 501
                    yield "                                                <div class=\"progress-bar bg-danger\" 
                                                     style=\"width: ";
                    // line 502
                    yield (((($context["progress"] ?? null) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true)));
                    yield "%\"
                                                     role=\"progressbar\">
                                                </div>
                                            </div>
                                            <small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Expire dans ";
                    // line 508
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysLeft"] ?? null), "html", null, true);
                    yield " jour";
                    yield (((($context["daysLeft"] ?? null) > 1)) ? ("s") : (""));
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 512
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            yield "                        </div>
                        
                        ";
            // line 516
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)) > 3)) {
                // line 517
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 518)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    Voir tous les lots (";
                // line 519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)), "html", null, true);
                yield ")
                                </a>
                            </div>
                        ";
            }
            // line 523
            yield "                    ";
        } else {
            // line 524
            yield "                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun lot actif en stock</p>
                        </div>
                    ";
        }
        // line 529
        yield "                </div>
            </div>
            
            <!-- Informations dates et historique -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-calendar-alt me-2 text-primary\"></i> Historique
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-plus-circle text-success me-2\"></i> Création</span>
                                <span>";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "createdAt", [], "any", false, false, false, 544), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        
                        ";
        // line 548
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "updatedAt", [], "any", false, false, false, 548)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 549
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-edit text-warning me-2\"></i> Dernière modification</span>
                                <span>";
            // line 552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "updatedAt", [], "any", false, false, false, 552), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 556
        yield "                        
                        ";
        // line 557
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 557)) > 0)) {
            // line 558
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-cart-plus text-info me-2\"></i> Dernier achat</span>
                                <span>";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 561)), "createdAt", [], "any", false, false, false, 561), "d/m/Y"), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 565
        yield "                        
                        <!-- 🔥 Traçabilité modification du stock -->
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-boxes text-primary me-2\"></i> Stock actuel</span>
                                <span class=\"fw-bold\">";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 570), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 570)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 570), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        
                        ";
        // line 574
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 575
            yield "                        <div class=\"list-group-item border-0 px-0 py-2 bg-light rounded mt-1\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <i class=\"fas fa-history text-info me-2\"></i>
                                    <span class=\"small fw-semibold\">Dernière modification du stock</span>
                                </div>
                                <span class=\"badge bg-secondary\">";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedAt", [], "any", false, false, false, 581), "d/m/Y H:i:s"), "html", null, true);
            yield "</span>
                            </div>
                            ";
            // line 583
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 584
                yield "                            <div class=\"mt-2\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-user me-1\"></i> 
                                    <strong>Modifié par :</strong> ";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, true, false, 587), "fullName", [], "any", true, true, false, 587)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 587), "fullName", [], "any", false, false, false, 587), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 587), "email", [], "any", false, false, false, 587))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 587), "email", [], "any", false, false, false, 587))), "html", null, true);
                yield "
                                </small>
                            </div>
                            ";
            }
            // line 591
            yield "                            <div class=\"mt-1\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-chart-line me-1\"></i>
                                    <strong>Stock après modification :</strong> ";
            // line 594
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 594), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 594)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 594), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        ";
        } else {
            // line 599
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-info-circle me-2\"></i> Stock initial</span>
                                <span>";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 602), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 602), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 606
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la désactivation/activation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusModalLabel\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusModalMessage\">Êtes-vous sûr de vouloir modifier le statut de ce produit ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\" value=\"\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusModalButton\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la suppression (avec vérification du nom si dépendances) -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 662
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 663
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
}

/* Timeline styles */
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -30px;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #667eea;
    border: 2px solid white;
    box-shadow: 0 0 0 3px #667eea33;
}

.timeline-date {
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 5px;
}

.timeline-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

/* Card hover effects */
.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}

/* Progress bar for expiry */
.progress {
    border-radius: 10px;
    overflow: hidden;
}

.progress-bar {
    border-radius: 10px;
}

/* Description container with scroll */
.product-description-container {
    line-height: 1.6;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #e9ecef;
}

.product-description-container::-webkit-scrollbar {
    width: 8px;
}

.product-description-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Badge colors */
.badge.bg-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.badge.bg-secondary {
    background-color: #6c757d !important;
}

/* Modal button styles */
#toggleStatusModalButton.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

#toggleStatusModalButton.btn-success {
    background-color: #198754;
    border-color: #198754;
}

#toggleStatusModalButton:hover {
    opacity: 0.9;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .d-flex.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
    }
    
    .btn-hover-scale {
        margin-top: 10px;
    }
}
</style>
";
        yield from [];
    }

    // line 824
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 825
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du modal de désactivation/activation
    const toggleStatusModal = document.getElementById('toggleStatusModal');
    if (toggleStatusModal) {
        toggleStatusModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const isActive = button.getAttribute('data-is-active') === '1';
            const token = button.getAttribute('data-token');
            
            const modalTitle = toggleStatusModal.querySelector('.modal-title');
            const modalMessage = toggleStatusModal.querySelector('#toggleStatusModalMessage');
            const modalButton = toggleStatusModal.querySelector('#toggleStatusModalButton');
            const modalForm = toggleStatusModal.querySelector('#toggleStatusForm');
            const tokenInput = document.getElementById('toggleStatusToken');
            
            if (isActive) {
                modalTitle.textContent = 'Désactiver le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir désactiver le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Désactiver';
                modalButton.className = 'btn btn-danger';
            } else {
                modalTitle.textContent = 'Activer le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir activer le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Activer';
                modalButton.className = 'btn btn-success';
            }
            
            modalForm.action = `/admin/product/\${productId}/toggle-status`;
            tokenInput.value = token;
        });
    }

    // Gestion du modal de suppression
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const hasDependencies = button.getAttribute('data-has-dependencies') === '1';
            const token = button.getAttribute('data-token');
            
            const modalContent = deleteModal.querySelector('#deleteModalContent');
            const deleteForm = deleteModal.querySelector('#deleteForm');
            const deleteToken = deleteModal.querySelector('#deleteToken');
            const deleteConfirmBtn = deleteModal.querySelector('#deleteConfirmBtn');
            
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = token;
            
            if (hasDependencies) {
                modalContent.innerHTML = `
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention !</strong> Ce produit est lié à des achats ou des lots de stock.
                    </div>
                    <p>Pour confirmer la suppression, veuillez taper le nom du produit :</p>
                    <input type=\"text\" id=\"confirmProductName\" class=\"form-control\" placeholder=\"Nom du produit\">
                `;
                deleteConfirmBtn.disabled = true;
                
                const confirmInput = deleteModal.querySelector('#confirmProductName');
                confirmInput.addEventListener('input', function() {
                    deleteConfirmBtn.disabled = (this.value.trim() !== productName);
                });
            } else {
                modalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer le produit <strong>\"\${productName}\"</strong> ?</p>
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }
        });
    }

    // Ajouter un indicateur de chargement lors de la soumission des formulaires modaux
    const toggleStatusForm = document.getElementById('toggleStatusForm');
    if (toggleStatusForm) {
        toggleStatusForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
        });
    }

    const deleteForm = document.getElementById('deleteForm');
    if (deleteForm) {
        deleteForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Suppression...';
        });
    }
    
    // Fermer automatiquement les alertes après 5 secondes
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert && alert.style.display !== 'none') {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000);
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/product/show.html.twig";
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
        return array (  1375 => 825,  1368 => 824,  1203 => 663,  1196 => 662,  1137 => 606,  1128 => 602,  1123 => 599,  1113 => 594,  1108 => 591,  1101 => 587,  1096 => 584,  1094 => 583,  1089 => 581,  1081 => 575,  1079 => 574,  1070 => 570,  1063 => 565,  1056 => 561,  1051 => 558,  1049 => 557,  1046 => 556,  1039 => 552,  1034 => 549,  1032 => 548,  1025 => 544,  1008 => 529,  1001 => 524,  998 => 523,  991 => 519,  987 => 518,  984 => 517,  982 => 516,  978 => 514,  971 => 512,  962 => 508,  953 => 502,  950 => 501,  947 => 500,  945 => 499,  941 => 497,  939 => 496,  932 => 492,  927 => 491,  920 => 487,  915 => 485,  912 => 484,  910 => 483,  901 => 479,  895 => 476,  890 => 473,  886 => 472,  883 => 471,  881 => 470,  878 => 469,  876 => 468,  862 => 456,  853 => 452,  849 => 451,  845 => 450,  841 => 449,  837 => 448,  831 => 444,  828 => 443,  826 => 442,  819 => 438,  815 => 437,  811 => 436,  807 => 435,  803 => 434,  799 => 433,  791 => 427,  782 => 422,  780 => 421,  777 => 420,  771 => 416,  769 => 415,  755 => 404,  746 => 398,  736 => 391,  728 => 386,  714 => 375,  695 => 358,  688 => 353,  685 => 352,  676 => 346,  673 => 345,  671 => 344,  668 => 343,  650 => 338,  646 => 336,  644 => 335,  639 => 333,  635 => 332,  630 => 329,  624 => 326,  620 => 324,  618 => 323,  614 => 322,  608 => 319,  600 => 314,  594 => 312,  577 => 311,  574 => 310,  572 => 309,  557 => 296,  548 => 290,  537 => 281,  535 => 280,  528 => 275,  521 => 270,  514 => 266,  509 => 265,  507 => 264,  490 => 249,  486 => 247,  480 => 244,  477 => 243,  475 => 242,  470 => 239,  463 => 235,  458 => 232,  456 => 231,  449 => 227,  443 => 223,  436 => 218,  434 => 217,  431 => 216,  426 => 214,  423 => 213,  421 => 212,  418 => 211,  413 => 209,  410 => 208,  408 => 207,  404 => 205,  398 => 201,  392 => 197,  390 => 196,  382 => 191,  376 => 187,  370 => 184,  365 => 181,  363 => 180,  358 => 178,  349 => 172,  342 => 168,  317 => 146,  309 => 141,  305 => 140,  298 => 136,  294 => 135,  285 => 129,  277 => 128,  273 => 126,  264 => 120,  251 => 111,  248 => 110,  246 => 109,  237 => 102,  235 => 101,  227 => 95,  220 => 90,  218 => 89,  204 => 79,  198 => 78,  195 => 77,  192 => 76,  189 => 75,  184 => 74,  182 => 73,  168 => 66,  161 => 61,  153 => 58,  149 => 56,  147 => 55,  135 => 48,  121 => 41,  106 => 29,  99 => 25,  90 => 19,  82 => 14,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\show.html.twig");
    }
}
