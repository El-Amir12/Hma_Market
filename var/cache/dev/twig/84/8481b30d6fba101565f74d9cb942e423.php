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

/* admin/purchase/add_product_modal.html.twig */
class __TwigTemplate_05b3451039f903dd861163d42846f92f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/add_product_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/add_product_modal.html.twig"));

        // line 1
        yield "<form id=\"addProductForm\">
    <div class=\"mb-3\">
        <label class=\"form-label\">Rechercher un produit</label>
        <div class=\"input-group\">
            <input type=\"text\" 
                   id=\"modalProductSearch\" 
                   class=\"form-control\" 
                   placeholder=\"Nom, code-barres...\"
                   autocomplete=\"off\">
            <button class=\"btn btn-outline-primary\" type=\"button\" id=\"modalSearchBtn\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
        <div id=\"modalSearchResults\" class=\"list-group mt-2\" style=\"display: none; max-height: 200px; overflow-y: auto;\"></div>
    </div>
    
    <div id=\"selectedProductContainer\" style=\"display: none;\">
        <input type=\"hidden\" name=\"product_id\" id=\"selectedProductId\">
        
        <div class=\"card border mb-3\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"mb-1\" id=\"selectedProductName\"></h6>
                        <div class=\"small text-muted\" id=\"selectedProductDetails\"></div>
                        <div class=\"mt-2\">
                            <span class=\"badge bg-info me-2\" id=\"selectedProductCategory\"></span>
                            <span class=\"badge\" id=\"selectedProductStock\"></span>
                        </div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"fw-bold\" id=\"selectedProductPrice\"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                <label class=\"form-label\">Numéro de lot</label>
                <input type=\"text\" 
                       class=\"form-control\" 
                       name=\"batch_number\" 
                       id=\"modalBatchNumber\"
                       placeholder=\"LOT-AUTO-";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Ymd"), "html", null, true);
        yield "\"
                       value=\"LOT-";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Ymd"), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1000, 9999), "html", null, true);
        yield "\">
                <div class=\"form-text small\">Généré automatiquement si vide</div>
            </div>
            <div class=\"col-md-6 mb-3\">
                <label class=\"form-label\">Quantité *</label>
                <input type=\"number\" 
                       class=\"form-control\" 
                       name=\"quantity\" 
                       id=\"modalQuantity\"
                       min=\"1\" 
                       value=\"1\" 
                       required>
            </div>
        </div>
        
        <div id=\"expiryDatesContainer\" style=\"display: none;\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Date de fabrication</label>
                    <input type=\"date\" 
                           class=\"form-control\" 
                           name=\"manufacturing_date\" 
                           id=\"modalManufacturingDate\"
                           value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Date d'expiration</label>
                    <input type=\"date\" 
                           class=\"form-control\" 
                           name=\"expiry_date\" 
                           id=\"modalExpiryDate\"
                           value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("+1 year", "Y-m-d"), "html", null, true);
        yield "\">
                </div>
            </div>
        </div>
        
        <div class=\"d-flex justify-content-between mt-4\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"changeProductBtn\">
                <i class=\"fas fa-arrow-left me-1\"></i> Changer de produit
            </button>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-1\"></i> Ajouter au panier
            </button>
        </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('modalProductSearch');
    const searchResults = document.getElementById('modalSearchResults');
    const selectedProductContainer = document.getElementById('selectedProductContainer');
    const searchContainer = document.querySelector('.mb-3:first-child');
    const expiryDatesContainer = document.getElementById('expiryDatesContainer');
    
    // Recherche de produits
    function searchProducts() {
        const query = searchInput.value.trim();
        if (query.length < 1) {
            searchResults.style.display = 'none';
            return;
        }
        
        fetch(`/admin/purchase/search-products?q=\${encodeURIComponent(query)}&limit=10`)
            .then(response => response.json())
            .then(products => {
                if (products.length === 0) {
                    searchResults.innerHTML = `
                        <div class=\"list-group-item text-muted\">
                            <i class=\"fas fa-search me-2\"></i>
                            Aucun produit trouvé pour \"\${query}\"
                        </div>
                    `;
                } else {
                    searchResults.innerHTML = products.map(product => `
                        <div class=\"list-group-item list-group-item-action product-item\" 
                             data-id=\"\${product.id}\"
                             data-name=\"\${product.name}\"
                             data-barcode=\"\${product.barcode}\"
                             data-price=\"\${product.purchase_price}\"
                             data-has-expiry=\"\${product.has_expiry_date}\"
                             data-category=\"\${product.category}\"
                             data-stock=\"\${product.current_stock}\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <strong>\${product.name}</strong>
                                    <div class=\"small text-muted\">\${product.barcode}</div>
                                    <div class=\"small\">
                                        <span class=\"badge \${product.has_expiry_date ? 'bg-warning' : 'bg-secondary'}\">
                                            \${product.has_expiry_date ? 'Périssable' : 'Non périssable'}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"fw-bold\">\${product.purchase_price} FCFA</div>
                                    <div class=\"small text-muted\">Stock: \${product.current_stock}</div>
                                </div>
                            </div>
                        </div>
                    `).join('');
                    
                    document.querySelectorAll('.product-item').forEach(item => {
                        item.addEventListener('click', function() {
                            selectProduct(this.dataset);
                        });
                    });
                }
                searchResults.style.display = 'block';
            });
    }
    
    // Sélectionner un produit
    function selectProduct(data) {
        document.getElementById('selectedProductId').value = data.id;
        document.getElementById('selectedProductName').textContent = data.name;
        document.getElementById('selectedProductDetails').textContent = data.barcode;
        document.getElementById('selectedProductCategory').textContent = data.category;
        document.getElementById('selectedProductPrice').textContent = data.price + ' FCFA';
        document.getElementById('selectedProductStock').textContent = 'Stock: ' + data.stock;
        document.getElementById('selectedProductStock').className = `badge \${data.stock <= 0 ? 'bg-danger' : (data.stock <= 10 ? 'bg-warning' : 'bg-success')}`;
        
        // Afficher les dates si périssable
        if (data.hasExpiry === 'true') {
            expiryDatesContainer.style.display = 'block';
        } else {
            expiryDatesContainer.style.display = 'none';
        }
        
        // Afficher le formulaire de détails
        selectedProductContainer.style.display = 'block';
        searchContainer.style.display = 'none';
        searchResults.style.display = 'none';
    }
    
    // Changer de produit
    document.getElementById('changeProductBtn').addEventListener('click', function() {
        selectedProductContainer.style.display = 'none';
        searchContainer.style.display = 'block';
        searchInput.value = '';
        searchInput.focus();
    });
    
    // Recherche avec délai
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(searchProducts, 300);
    });
    
    document.getElementById('modalSearchBtn').addEventListener('click', searchProducts);
    
    // Soumission du formulaire
    document.getElementById('addProductForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('/admin/purchase/cart/add-product', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Fermer le modal et recharger la page
                const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                if (modal) {
                    modal.hide();
                }
                location.reload();
            } else {
                alert('Erreur: ' + data.message);
            }
        })
        .catch(error => {
            alert('Erreur: ' + error.message);
        });
    });
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
        return "admin/purchase/add_product_modal.html.twig";
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
        return array (  137 => 77,  126 => 69,  98 => 46,  94 => 45,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"addProductForm\">
    <div class=\"mb-3\">
        <label class=\"form-label\">Rechercher un produit</label>
        <div class=\"input-group\">
            <input type=\"text\" 
                   id=\"modalProductSearch\" 
                   class=\"form-control\" 
                   placeholder=\"Nom, code-barres...\"
                   autocomplete=\"off\">
            <button class=\"btn btn-outline-primary\" type=\"button\" id=\"modalSearchBtn\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
        <div id=\"modalSearchResults\" class=\"list-group mt-2\" style=\"display: none; max-height: 200px; overflow-y: auto;\"></div>
    </div>
    
    <div id=\"selectedProductContainer\" style=\"display: none;\">
        <input type=\"hidden\" name=\"product_id\" id=\"selectedProductId\">
        
        <div class=\"card border mb-3\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h6 class=\"mb-1\" id=\"selectedProductName\"></h6>
                        <div class=\"small text-muted\" id=\"selectedProductDetails\"></div>
                        <div class=\"mt-2\">
                            <span class=\"badge bg-info me-2\" id=\"selectedProductCategory\"></span>
                            <span class=\"badge\" id=\"selectedProductStock\"></span>
                        </div>
                    </div>
                    <div class=\"text-end\">
                        <div class=\"fw-bold\" id=\"selectedProductPrice\"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
                <label class=\"form-label\">Numéro de lot</label>
                <input type=\"text\" 
                       class=\"form-control\" 
                       name=\"batch_number\" 
                       id=\"modalBatchNumber\"
                       placeholder=\"LOT-AUTO-{{ \"now\"|date('Ymd') }}\"
                       value=\"LOT-{{ \"now\"|date('Ymd') }}-{{ random(1000, 9999) }}\">
                <div class=\"form-text small\">Généré automatiquement si vide</div>
            </div>
            <div class=\"col-md-6 mb-3\">
                <label class=\"form-label\">Quantité *</label>
                <input type=\"number\" 
                       class=\"form-control\" 
                       name=\"quantity\" 
                       id=\"modalQuantity\"
                       min=\"1\" 
                       value=\"1\" 
                       required>
            </div>
        </div>
        
        <div id=\"expiryDatesContainer\" style=\"display: none;\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Date de fabrication</label>
                    <input type=\"date\" 
                           class=\"form-control\" 
                           name=\"manufacturing_date\" 
                           id=\"modalManufacturingDate\"
                           value=\"{{ \"now\"|date('Y-m-d') }}\">
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Date d'expiration</label>
                    <input type=\"date\" 
                           class=\"form-control\" 
                           name=\"expiry_date\" 
                           id=\"modalExpiryDate\"
                           value=\"{{ \"+1 year\"|date('Y-m-d') }}\">
                </div>
            </div>
        </div>
        
        <div class=\"d-flex justify-content-between mt-4\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"changeProductBtn\">
                <i class=\"fas fa-arrow-left me-1\"></i> Changer de produit
            </button>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-1\"></i> Ajouter au panier
            </button>
        </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('modalProductSearch');
    const searchResults = document.getElementById('modalSearchResults');
    const selectedProductContainer = document.getElementById('selectedProductContainer');
    const searchContainer = document.querySelector('.mb-3:first-child');
    const expiryDatesContainer = document.getElementById('expiryDatesContainer');
    
    // Recherche de produits
    function searchProducts() {
        const query = searchInput.value.trim();
        if (query.length < 1) {
            searchResults.style.display = 'none';
            return;
        }
        
        fetch(`/admin/purchase/search-products?q=\${encodeURIComponent(query)}&limit=10`)
            .then(response => response.json())
            .then(products => {
                if (products.length === 0) {
                    searchResults.innerHTML = `
                        <div class=\"list-group-item text-muted\">
                            <i class=\"fas fa-search me-2\"></i>
                            Aucun produit trouvé pour \"\${query}\"
                        </div>
                    `;
                } else {
                    searchResults.innerHTML = products.map(product => `
                        <div class=\"list-group-item list-group-item-action product-item\" 
                             data-id=\"\${product.id}\"
                             data-name=\"\${product.name}\"
                             data-barcode=\"\${product.barcode}\"
                             data-price=\"\${product.purchase_price}\"
                             data-has-expiry=\"\${product.has_expiry_date}\"
                             data-category=\"\${product.category}\"
                             data-stock=\"\${product.current_stock}\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div>
                                    <strong>\${product.name}</strong>
                                    <div class=\"small text-muted\">\${product.barcode}</div>
                                    <div class=\"small\">
                                        <span class=\"badge \${product.has_expiry_date ? 'bg-warning' : 'bg-secondary'}\">
                                            \${product.has_expiry_date ? 'Périssable' : 'Non périssable'}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"fw-bold\">\${product.purchase_price} FCFA</div>
                                    <div class=\"small text-muted\">Stock: \${product.current_stock}</div>
                                </div>
                            </div>
                        </div>
                    `).join('');
                    
                    document.querySelectorAll('.product-item').forEach(item => {
                        item.addEventListener('click', function() {
                            selectProduct(this.dataset);
                        });
                    });
                }
                searchResults.style.display = 'block';
            });
    }
    
    // Sélectionner un produit
    function selectProduct(data) {
        document.getElementById('selectedProductId').value = data.id;
        document.getElementById('selectedProductName').textContent = data.name;
        document.getElementById('selectedProductDetails').textContent = data.barcode;
        document.getElementById('selectedProductCategory').textContent = data.category;
        document.getElementById('selectedProductPrice').textContent = data.price + ' FCFA';
        document.getElementById('selectedProductStock').textContent = 'Stock: ' + data.stock;
        document.getElementById('selectedProductStock').className = `badge \${data.stock <= 0 ? 'bg-danger' : (data.stock <= 10 ? 'bg-warning' : 'bg-success')}`;
        
        // Afficher les dates si périssable
        if (data.hasExpiry === 'true') {
            expiryDatesContainer.style.display = 'block';
        } else {
            expiryDatesContainer.style.display = 'none';
        }
        
        // Afficher le formulaire de détails
        selectedProductContainer.style.display = 'block';
        searchContainer.style.display = 'none';
        searchResults.style.display = 'none';
    }
    
    // Changer de produit
    document.getElementById('changeProductBtn').addEventListener('click', function() {
        selectedProductContainer.style.display = 'none';
        searchContainer.style.display = 'block';
        searchInput.value = '';
        searchInput.focus();
    });
    
    // Recherche avec délai
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(searchProducts, 300);
    });
    
    document.getElementById('modalSearchBtn').addEventListener('click', searchProducts);
    
    // Soumission du formulaire
    document.getElementById('addProductForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('/admin/purchase/cart/add-product', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Fermer le modal et recharger la page
                const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
                if (modal) {
                    modal.hide();
                }
                location.reload();
            } else {
                alert('Erreur: ' + data.message);
            }
        })
        .catch(error => {
            alert('Erreur: ' + error.message);
        });
    });
});
</script>", "admin/purchase/add_product_modal.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\add_product_modal.html.twig");
    }
}
