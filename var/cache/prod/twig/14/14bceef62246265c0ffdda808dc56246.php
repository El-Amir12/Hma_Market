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

/* admin/Location/show.html.twig */
class __TwigTemplate_5c7dbb5a5888ec7178fb2b86b168ec8e extends Template
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
        yield "Emplacement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "code", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                                        <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "code", [], "any", false, false, false, 62), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 70), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Statut</label>
                                <div>
                                    <span class=\"badge ";
        // line 77
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "isActive", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                        ";
        // line 78
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "isActive", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "description", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                        <div class=\"mt-2\">
                            <label class=\"text-muted small fw-bold\">Description</label>
                            <p class=\"mb-0\">";
            // line 87
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "description", [], "any", false, false, false, 87), "html", null, true));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "createdAt", [], "any", false, false, false, 101), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"d-flex justify-content-between\">
                                    <span class=\"text-white-50\">Lots associés :</span>
                                    <span class=\"text-white\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "stockBatches", [], "any", false, false, false, 105)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", false, false, false, 121), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", false, false, false, 130), 0)) : (0)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", false, false, false, 139), 0)) : (0)), 0, ",", " "), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["batches"] ?? null));
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
            if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger
                                ";
            } elseif ((($tmp =             // line 175
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning
                                ";
            } elseif ((($tmp =             // line 176
($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($context["percentage"] ?? null) <= 10)) {
                yield "bg-danger
                                                ";
            } elseif ((            // line 207
($context["percentage"] ?? null) <= 30)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["percentage"] ?? null), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        ";
            // line 212
            if ((($tmp = ($context["isLowStock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                if ((($tmp = ($context["isExpired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 224
                    yield "                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 225
($context["isExpiringSoon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        if ((array_key_exists("totalPages", $context) && (($context["totalPages"] ?? null) > 1))) {
            // line 266
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 269
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 270
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 271), "page" => (($context["currentPage"] ?? null) - 1)]), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i> Précédent
                            </a>
                        </li>
                    ";
            }
            // line 276
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 277
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 278), "page" => $context["page"]]), "html", null, true);
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
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 282
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 283
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 283), "page" => (($context["currentPage"] ?? null) + 1)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 305)]), "html", null, true);
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
        if ((array_key_exists("all_locations", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["all_locations"] ?? null)))) {
            // line 320
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["all_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["otherLocation"]) {
                // line 321
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["otherLocation"], "id", [], "any", false, false, false, 321) != CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 321))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 338))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 348
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 349
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const locationHasBatches = ";
        // line 352
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "stockBatches", [], "any", false, false, false, 352)) > 0)) ? ("true") : ("false"));
        yield ";
    const batchesCount = ";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "stockBatches", [], "any", false, false, false, 353)), "html", null, true);
        yield ";
    const locationName = \"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "name", [], "any", false, false, false, 354), "js"), "html", null, true);
        yield "\";
    const currentLocationId = ";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["location"] ?? null), "id", [], "any", false, false, false, 355), "html", null, true);
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
        yield from [];
    }

    // line 391
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/Location/show.html.twig";
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
        return array (  725 => 392,  718 => 391,  678 => 355,  674 => 354,  670 => 353,  666 => 352,  660 => 349,  653 => 348,  639 => 338,  627 => 328,  624 => 327,  618 => 326,  612 => 323,  607 => 322,  604 => 321,  599 => 320,  597 => 319,  580 => 305,  565 => 292,  559 => 288,  551 => 283,  548 => 282,  545 => 281,  534 => 278,  529 => 277,  524 => 276,  516 => 271,  513 => 270,  511 => 269,  506 => 266,  504 => 265,  496 => 259,  484 => 252,  482 => 251,  470 => 244,  463 => 240,  455 => 235,  451 => 234,  447 => 232,  443 => 230,  439 => 228,  435 => 226,  433 => 225,  430 => 224,  428 => 223,  424 => 222,  421 => 221,  419 => 220,  414 => 218,  410 => 216,  405 => 213,  403 => 212,  398 => 210,  395 => 209,  391 => 208,  386 => 207,  382 => 206,  379 => 205,  377 => 204,  372 => 202,  368 => 201,  360 => 196,  353 => 192,  348 => 190,  344 => 188,  338 => 185,  333 => 182,  331 => 181,  327 => 180,  323 => 178,  318 => 176,  314 => 175,  310 => 174,  306 => 172,  303 => 171,  300 => 170,  297 => 169,  292 => 168,  260 => 139,  248 => 130,  236 => 121,  217 => 105,  210 => 101,  197 => 90,  191 => 87,  187 => 85,  185 => 84,  176 => 78,  172 => 77,  162 => 70,  156 => 66,  152 => 64,  146 => 62,  144 => 61,  119 => 39,  113 => 36,  99 => 25,  90 => 19,  82 => 14,  73 => 7,  66 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/Location/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\Location\\show.html.twig");
    }
}
