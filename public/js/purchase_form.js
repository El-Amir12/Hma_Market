// public/js/purchase_form.js - CORRIGÉ
document.addEventListener('DOMContentLoaded', function() {
    console.log('🎯 Purchase form script chargé');
    
    // Vérification jQuery
    if (typeof jQuery === 'undefined') {
        console.error('❌ jQuery n\'est pas chargé');
        showAlert('error', 'jQuery n\'est pas chargé. Veuillez rafraîchir la page.');
        return;
    }
    
    // Éléments principaux
    const purchaseForm = document.getElementById('purchase-form');
    const purchaseItemsContainer = document.getElementById('purchase-items-container');
    const emptyState = document.getElementById('empty-state');
    const addProductBtn = document.getElementById('add-product-btn');
    const submitBtn = document.getElementById('submit-btn');
    const productSearchInput = document.getElementById('product-search-input');
    const searchProductBtn = document.getElementById('search-product-btn');
    const showCatalogBtn = document.getElementById('show-catalog-btn');
    const closeCatalogBtn = document.getElementById('close-catalog-btn');
    const productCatalog = document.getElementById('product-catalog');
    const catalogProducts = document.getElementById('catalog-products');
    const scanProductBtn = document.getElementById('scan-product-btn');
    const scanModal = document.getElementById('scanModal') ? new bootstrap.Modal(document.getElementById('scanModal')) : null;
    const barcodeInput = document.getElementById('barcode-input');
    const scanManualBtn = document.getElementById('scan-manual-btn');
    const addFirstProductBtn = document.getElementById('add-first-product');
    
    if (!purchaseForm) {
        console.error('❌ Formulaire non trouvé');
        return;
    }
    
    // Variables
    let currentIndex = purchaseItemsContainer.dataset.index || 0;
    const isSingleProduct = purchaseItemsContainer.dataset.prefilled === "true";
    
    // Initialisation
    console.log('Mode produit unique:', isSingleProduct);
    
    // Initialiser Select2 pour les fournisseurs
    if ($('.select2-supplier').length) {
        $('.select2-supplier').select2({
            theme: 'bootstrap-5',
            placeholder: "Sélectionnez un fournisseur...",
            allowClear: true,
            language: 'fr',
            width: '100%'
        });
    }
    
    // Tooltips Bootstrap
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // ============================================
    // FONCTIONS PRINCIPALES
    // ============================================
    
    // Fonction pour ajouter un produit - CORRIGÉ pour éviter le double ajout
    function addProductItem(productData = null) {
        console.log('➕ Ajout produit, index:', currentIndex);
        
        // Supprimer l'état vide si présent
        if (emptyState) emptyState.style.display = 'none';
        
        const prototype = purchaseItemsContainer.dataset.prototype;
        
        // CORRECTION : Nettoyer le prototype
        let cleanPrototype = prototype
            .replace(/__name__label__/g, currentIndex)
            .replace(/__name__/g, currentIndex);
        
        // S'assurer que le prototype est correct
        if (cleanPrototype.includes('__purchase_item_prototype__')) {
            cleanPrototype = cleanPrototype.replace(/__purchase_item_prototype__/g, currentIndex);
        }
        
        const newElement = document.createElement('div');
        newElement.innerHTML = cleanPrototype;
        const newFormElement = newElement.firstElementChild;
        
        // CORRECTION : Vérifier que c'est bien un élément div
        if (!newFormElement || newFormElement.nodeType !== 1) {
            console.error('❌ Erreur lors de la création de l\'élément');
            return null;
        }
        
        purchaseItemsContainer.appendChild(newFormElement);
        initProductItem(newFormElement, currentIndex, productData);
        
        currentIndex++;
        purchaseItemsContainer.dataset.index = currentIndex;
        
        updateItemNumbers();
        updateTotals();
        
        // Animation
        newFormElement.style.opacity = '0';
        newFormElement.style.transform = 'translateY(20px)';
        setTimeout(() => {
            newFormElement.style.transition = 'all 0.3s ease';
            newFormElement.style.opacity = '1';
            newFormElement.style.transform = 'translateY(0)';
        }, 10);
        
        return newFormElement;
    }
    
    // Initialiser un élément produit
    function initProductItem(itemElement, index, productData = null) {
        console.log('🔄 Initialisation produit', index);
        
        // Mettre à jour le numéro
        const itemNumber = itemElement.querySelector('.item-number');
        if (itemNumber) itemNumber.textContent = index + 1;
        
        // Bouton de suppression
        const removeBtn = itemElement.querySelector('.remove-item-btn');
        if (removeBtn) {
            // CORRECTION : Supprimer les anciens écouteurs
            removeBtn.replaceWith(removeBtn.cloneNode(true));
            const newRemoveBtn = itemElement.querySelector('.remove-item-btn');
            
            newRemoveBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const itemCount = purchaseItemsContainer.querySelectorAll('.purchase-item').length;
                if (itemCount === 1 && isSingleProduct) {
                    showAlert('warning', 'Ceci est le seul produit. Supprimez-le pour annuler l\'achat.');
                    return;
                }
                
                if (confirm('Supprimer ce produit de la réception ?')) {
                    itemElement.style.opacity = '0';
                    itemElement.style.transform = 'translateY(-20px)';
                    
                    setTimeout(() => {
                        itemElement.remove();
                        updateItemNumbers();
                        updateTotals();
                        
                        // Afficher l'état vide si besoin
                        const remainingItems = purchaseItemsContainer.querySelectorAll('.purchase-item').length;
                        if (remainingItems === 0 && emptyState) {
                            emptyState.style.display = 'block';
                        }
                    }, 300);
                }
            });
        }
        
        // Initialiser Select2 pour le produit
        const productSelect = itemElement.querySelector('.product-select');
        if (productSelect) {
            // CORRECTION : Détruire Select2 s'il existe déjà
            if ($(productSelect).hasClass('select2-hidden-accessible')) {
                $(productSelect).select2('destroy');
            }
            
            $(productSelect).select2({
                theme: 'bootstrap-5',
                placeholder: "Rechercher un produit...",
                allowClear: true,
                minimumInputLength: 2,
                language: 'fr',
                width: '100%',
                ajax: {
                    url: '/admin/purchase/product/search',
                    dataType: 'json',
                    delay: 300,
                    data: function(params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function(data) {
                        console.log('🔍 Résultats recherche:', data.length);
                        return {
                            results: data.map(product => ({
                                id: product.id,
                                text: `${product.name} (${product.barcode}) - Stock: ${product.stockQuantity}`,
                                purchasePrice: product.purchasePrice,
                                hasExpiryDate: product.hasExpiryDate
                            }))
                        };
                    },
                    cache: true
                }
            }).on('select2:select', function(e) {
                const selectedData = e.params.data;
                console.log('✅ Produit sélectionné:', selectedData.text);
                
                const item = $(this).closest('.purchase-item');
                
                // Mettre à jour le prix
                const priceInput = item.find('.price-input');
                if (priceInput.val() === '' && selectedData.purchasePrice) {
                    priceInput.val(selectedData.purchasePrice);
                    priceInput.trigger('input');
                }
                
                // Gérer les champs de date
                const expiryDateContainer = item.find('.expiry-date-container');
                const manufacturingDateContainer = item.find('.manufacturing-date-container');
                
                if (selectedData.hasExpiryDate) {
                    expiryDateContainer.show();
                    manufacturingDateContainer.show();
                    
                    // Pré-remplir les dates
                    const manufacturingInput = item.find('.manufacturing-date');
                    const expiryInput = item.find('.expiry-date');
                    
                    if (!manufacturingInput.val()) {
                        const today = new Date();
                        manufacturingInput.val(today.toISOString().split('T')[0]);
                    }
                    
                    if (!expiryInput.val()) {
                        const futureDate = new Date();
                        futureDate.setFullYear(futureDate.getFullYear() + 1);
                        expiryInput.val(futureDate.toISOString().split('T')[0]);
                    }
                } else {
                    expiryDateContainer.hide();
                    manufacturingDateContainer.hide();
                    
                    // Vider les champs
                    item.find('.manufacturing-date').val('');
                    item.find('.expiry-date').val('');
                }
                
                // Générer un numéro de lot
                const batchInput = item.find('.batch-input');
                if (!batchInput.val()) {
                    batchInput.val(generateBatchNumber());
                }
                
                updateLineTotal(item[0]);
                updateTotals();
            });
            
            // Pré-remplir si données fournies
            if (productData) {
                console.log('📦 Pré-remplissage produit:', productData.name);
                
                // CORRECTION : Nettoyer les options existantes
                $(productSelect).empty();
                
                const option = new Option(
                    `${productData.name} (${productData.barcode}) - Stock: ${productData.stockQuantity}`,
                    productData.id,
                    true,
                    true
                );
                
                // Ajouter les données
                $(option).data('purchasePrice', productData.purchasePrice);
                $(option).data('hasExpiryDate', productData.hasExpiryDate);
                
                $(productSelect).append(option).trigger('change');
            }
        }
        
        // Écouteurs pour les champs numériques - CORRECTION : éviter les doublons
        const quantityInput = itemElement.querySelector('.quantity-input');
        const priceInput = itemElement.querySelector('.price-input');
        const batchInput = itemElement.querySelector('.batch-input');
        
        // Fonction pour gérer les événements d'input
        function setupInputListeners() {
            if (quantityInput) {
                // Supprimer les anciens écouteurs
                const newQuantityInput = quantityInput.cloneNode(true);
                quantityInput.parentNode.replaceChild(newQuantityInput, quantityInput);
                
                if (!newQuantityInput.value) newQuantityInput.value = 1;
                newQuantityInput.addEventListener('input', function() {
                    if (this.value < 1) this.value = 1;
                    if (this.value > 9999) this.value = 9999;
                    updateLineTotal(itemElement);
                    updateTotals();
                });
            }
            
            if (priceInput) {
                const newPriceInput = priceInput.cloneNode(true);
                priceInput.parentNode.replaceChild(newPriceInput, priceInput);
                
                newPriceInput.addEventListener('input', function() {
                    if (this.value < 0) this.value = 0;
                    updateLineTotal(itemElement);
                    updateTotals();
                });
            }
            
            if (batchInput) {
                const newBatchInput = batchInput.cloneNode(true);
                batchInput.parentNode.replaceChild(newBatchInput, batchInput);
                
                if (!newBatchInput.value) {
                    newBatchInput.value = generateBatchNumber();
                }
            }
        }
        
        setupInputListeners();
        
        // Écouteurs pour les dates
        const manufacturingDate = itemElement.querySelector('.manufacturing-date');
        const expiryDate = itemElement.querySelector('.expiry-date');
        
        if (manufacturingDate) {
            manufacturingDate.addEventListener('change', function() {
                updateLineTotal(itemElement);
            });
        }
        
        if (expiryDate) {
            expiryDate.addEventListener('change', function() {
                updateLineTotal(itemElement);
            });
        }
        
        // Pour les produits existants (édition)
        if (!productData && productSelect && productSelect.value) {
            setTimeout(() => {
                $(productSelect).trigger('change');
            }, 100);
        }
    }
    
    // Calculer le total d'une ligne
    function updateLineTotal(itemElement) {
        const quantity = parseFloat(itemElement.querySelector('.quantity-input')?.value) || 0;
        const price = parseFloat(itemElement.querySelector('.price-input')?.value) || 0;
        const total = quantity * price;
        
        const lineTotalElement = itemElement.querySelector('.line-total');
        const quantityDisplay = itemElement.querySelector('.quantity-display');
        const priceDisplay = itemElement.querySelector('.price-display');
        
        if (lineTotalElement) {
            lineTotalElement.textContent = formatPrice(total) + ' FCFA';
        }
        if (quantityDisplay) {
            quantityDisplay.textContent = quantity;
        }
        if (priceDisplay) {
            priceDisplay.textContent = formatPrice(price);
        }
        
        return total;
    }
    
    // Mettre à jour les totaux généraux
    function updateTotals() {
        let total = 0;
        let itemCount = 0;
        
        document.querySelectorAll('.purchase-item').forEach(item => {
            const quantity = parseFloat(item.querySelector('.quantity-input')?.value) || 0;
            const price = parseFloat(item.querySelector('.price-input')?.value) || 0;
            
            if (quantity > 0 && price > 0) {
                total += quantity * price;
                itemCount++;
            }
        });
        
        // Mettre à jour l'affichage
        const itemCountDisplay = document.getElementById('item-count-display');
        const purchaseTotal = document.getElementById('purchase-total');
        const totalAmountInput = document.querySelector('input[name="purchase[total_amount]"]');
        const itemCountBadge = document.getElementById('item-count');
        
        if (itemCountDisplay) itemCountDisplay.textContent = itemCount;
        if (itemCountBadge) itemCountBadge.textContent = itemCount;
        if (purchaseTotal) purchaseTotal.textContent = formatPrice(total) + ' FCFA';
        if (totalAmountInput) totalAmountInput.value = total.toFixed(2);
        
        // Afficher/masquer le bouton ajouter
        if (addProductBtn && !isSingleProduct) {
            if (itemCount > 0) {
                addProductBtn.style.display = 'inline-flex';
            } else {
                addProductBtn.style.display = 'none';
            }
        }
    }
    
    // Formater un prix
    function formatPrice(price) {
        return new Intl.NumberFormat('fr-FR', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(price);
    }
    
    // Générer un numéro de lot
    function generateBatchNumber() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const random = Math.floor(1000 + Math.random() * 9000);
        
        return `LOT-${year}${month}${day}-${hours}${minutes}-${random}`;
    }
    
    // Mettre à jour les numéros d'ordre
    function updateItemNumbers() {
        document.querySelectorAll('.purchase-item').forEach((item, index) => {
            const itemNumber = item.querySelector('.item-number');
            const badge = item.querySelector('.badge.bg-primary');
            
            if (itemNumber) itemNumber.textContent = index + 1;
            if (badge) badge.textContent = index + 1;
        });
    }
    
    // ============================================
    // FONCTIONNALITÉS AVANCÉES
    // ============================================
    
    // Recherche de produits
    function searchProducts(query) {
        if (!query || query.trim().length < 2) {
            showAlert('warning', 'Veuillez saisir au moins 2 caractères');
            return;
        }
        
        console.log('🔍 Recherche produits:', query);
        
        // Afficher le loader
        catalogProducts.innerHTML = `
            <div class="col-12 text-center py-5">
                <div class="spinner-border text-primary mb-3" role="status">
                    <span class="visually-hidden">Chargement...</span>
                </div>
                <p class="text-muted">Recherche en cours...</p>
            </div>
        `;
        
        productCatalog.classList.remove('d-none');
        
        // Requête AJAX
        fetch(`/admin/purchase/product/search?q=${encodeURIComponent(query)}`)
            .then(response => {
                if (!response.ok) throw new Error('Erreur réseau');
                return response.json();
            })
            .then(products => {
                console.log('✅ Produits trouvés:', products.length);
                displayProductCatalog(products);
            })
            .catch(error => {
                console.error('❌ Erreur recherche:', error);
                catalogProducts.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-exclamation-triangle fa-2x text-danger mb-3"></i>
                        <p class="text-danger">Erreur lors de la recherche</p>
                        <p class="text-muted small">${error.message}</p>
                    </div>
                `;
            });
    }
    
    // Afficher le catalogue
    function displayProductCatalog(products) {
        if (products.length === 0) {
            catalogProducts.innerHTML = `
                <div class="col-12 text-center py-5">
                    <i class="fas fa-search fa-3x text-muted mb-3"></i>
                    <h6 class="text-muted">Aucun produit trouvé</h6>
                    <p class="text-muted small">Essayez avec d'autres termes</p>
                </div>
            `;
            return;
        }
        
        let html = '';
        products.forEach(product => {
            const isPerishable = product.hasExpiryDate;
            html += `
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 shadow-sm hover-shadow" 
                         data-product-id="${product.id}"
                         data-product-name="${product.name}"
                         data-purchase-price="${product.purchasePrice}"
                         data-has-expiry-date="${product.hasExpiryDate}"
                         data-stock-quantity="${product.stockQuantity}"
                         data-barcode="${product.barcode}">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-2">
                                <div class="flex-grow-1">
                                    <h6 class="card-title mb-1 text-truncate" title="${product.name}">
                                        ${product.name}
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-light text-dark me-2">
                                            <i class="fas fa-barcode me-1"></i>${product.barcode}
                                        </span>
                                        <span class="badge ${isPerishable ? 'bg-warning' : 'bg-success'}">
                                            ${isPerishable ? 'Périssable' : 'Non périssable'}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row g-2 mt-3">
                                <div class="col-6">
                                    <small class="text-muted d-block">Stock actuel</small>
                                    <span class="fw-bold ${product.stockQuantity < 10 ? 'text-danger' : 'text-success'}">
                                        ${product.stockQuantity} unités
                                    </span>
                                </div>
                                <div class="col-6 text-end">
                                    <small class="text-muted d-block">Prix d'achat</small>
                                    <span class="fw-bold text-primary">
                                        ${formatPrice(product.purchasePrice)} FCFA
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top-0 pt-0">
                            <button type="button" class="btn btn-primary btn-sm w-100 add-from-catalog-btn">
                                <i class="fas fa-plus me-1"></i> Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>
            `;
        });
        
        catalogProducts.innerHTML = html;
        
        // Ajouter les écouteurs d'événements
        document.querySelectorAll('.add-from-catalog-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const card = this.closest('.product-card');
                const productData = {
                    id: card.dataset.productId,
                    name: card.dataset.productName,
                    purchasePrice: card.dataset.purchasePrice,
                    hasExpiryDate: card.dataset.hasExpiryDate === 'true',
                    stockQuantity: card.dataset.stockQuantity,
                    barcode: card.dataset.barcode
                };
                
                console.log('📥 Ajout depuis catalogue:', productData.name);
                
                // Fermer le catalogue
                productCatalog.classList.add('d-none');
                if (productSearchInput) productSearchInput.value = '';
                
                // Ajouter le produit - CORRECTION : une seule fois
                const newItem = addProductItem(productData);
                
                if (newItem) {
                    // Scroll vers le nouvel élément
                    setTimeout(() => {
                        newItem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        
                        // Focus sur la quantité
                        const quantityInput = newItem.querySelector('.quantity-input');
                        if (quantityInput) {
                            quantityInput.focus();
                            quantityInput.select();
                        }
                    }, 300);
                }
            });
        });
    }
    
    // Scanner un produit
    function setupScanner() {
        if (!scanProductBtn || !scanModal) return;
        
        scanProductBtn.addEventListener('click', function() {
            scanModal.show();
            setTimeout(() => {
                if (barcodeInput) {
                    barcodeInput.focus();
                    barcodeInput.select();
                }
            }, 500);
        });
        
        // Scanner manuel
        if (scanManualBtn && barcodeInput) {
            scanManualBtn.addEventListener('click', function() {
                const barcode = barcodeInput.value.trim();
                if (barcode) {
                    searchProducts(barcode);
                    scanModal.hide();
                    barcodeInput.value = '';
                } else {
                    showAlert('warning', 'Veuillez saisir un code-barres');
                }
            });
            
            // Enter pour scanner
            barcodeInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    scanManualBtn.click();
                }
            });
        }
    }
    
    // ============================================
    // ÉCOUTEURS D'ÉVÉNEMENTS - CORRECTION DES DOUBLONS
    // ============================================
    
    // Bouton ajouter produit - CORRECTION : éviter les doubles clics
    if (addProductBtn) {
        // Supprimer les anciens écouteurs
        const newAddProductBtn = addProductBtn.cloneNode(true);
        addProductBtn.parentNode.replaceChild(newAddProductBtn, addProductBtn);
        
        newAddProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('🎯 Bouton "Ajouter produit" cliqué');
            
            // Désactiver temporairement le bouton pour éviter les doubles clics
            this.disabled = true;
            
            const newItem = addProductItem();
            
            if (newItem) {
                newItem.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                setTimeout(() => {
                    const productSelect = newItem.querySelector('.product-select');
                    if (productSelect) {
                        $(productSelect).select2('open');
                    }
                    
                    // Réactiver le bouton après 500ms
                    this.disabled = false;
                }, 300);
            } else {
                // Réactiver le bouton en cas d'erreur
                this.disabled = false;
            }
        });
    }
    
    // Bouton "Ajouter mon premier produit"
    if (addFirstProductBtn) {
        const newAddFirstProductBtn = addFirstProductBtn.cloneNode(true);
        addFirstProductBtn.parentNode.replaceChild(newAddFirstProductBtn, addFirstProductBtn);
        
        newAddFirstProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('🎯 Bouton "Ajouter mon premier produit" cliqué');
            
            // Désactiver temporairement
            this.disabled = true;
            
            const newItem = addProductItem();
            
            if (newItem) {
                setTimeout(() => {
                    const productSelect = newItem.querySelector('.product-select');
                    if (productSelect) {
                        $(productSelect).select2('open');
                    }
                    
                    this.disabled = false;
                }, 300);
            } else {
                this.disabled = false;
            }
        });
    }
    
    // Recherche
    if (searchProductBtn && productSearchInput) {
        const newSearchProductBtn = searchProductBtn.cloneNode(true);
        searchProductBtn.parentNode.replaceChild(newSearchProductBtn, searchProductBtn);
        
        newSearchProductBtn.addEventListener('click', function() {
            searchProducts(productSearchInput.value);
        });
        
        productSearchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                searchProducts(this.value);
            }
        });
    }
    
    // Gestion du catalogue
    if (showCatalogBtn) {
        const newShowCatalogBtn = showCatalogBtn.cloneNode(true);
        showCatalogBtn.parentNode.replaceChild(newShowCatalogBtn, showCatalogBtn);
        
        newShowCatalogBtn.addEventListener('click', function() {
            productCatalog.classList.remove('d-none');
            if (productSearchInput) {
                productSearchInput.focus();
                productSearchInput.select();
            }
        });
    }
    
    if (closeCatalogBtn) {
        const newCloseCatalogBtn = closeCatalogBtn.cloneNode(true);
        closeCatalogBtn.parentNode.replaceChild(newCloseCatalogBtn, closeCatalogBtn);
        
        newCloseCatalogBtn.addEventListener('click', function() {
            productCatalog.classList.add('d-none');
            if (productSearchInput) productSearchInput.value = '';
        });
    }
    
    // Configuration du scanner
    setupScanner();
    
    // ============================================
    // VALIDATION DU FORMULAIRE - CORRECTION COMPLÈTE
    // ============================================
    
    // CORRECTION : Simplifier la validation et la soumission
    purchaseForm.addEventListener('submit', function(e) {
        console.log('📋 Début validation formulaire');
        
        // 1. Nettoyer les erreurs précédentes
        document.querySelectorAll('.alert-dismissible').forEach(alert => {
            if (alert.classList.contains('alert-danger') || alert.classList.contains('alert-warning')) {
                alert.remove();
            }
        });
        
        document.querySelectorAll('.is-invalid').forEach(el => {
            el.classList.remove('is-invalid');
        });
        
        document.querySelectorAll('.invalid-feedback').forEach(el => {
            el.remove();
        });
        
        // 2. Vérifier les produits
        const items = document.querySelectorAll('.purchase-item');
        if (items.length === 0) {
            e.preventDefault();
            showAlert('warning', 'Veuillez ajouter au moins un produit');
            return false;
        }
        
        let isValid = true;
        let firstErrorElement = null;
        
        // 3. Validation de chaque produit
        items.forEach((item, index) => {
            const productSelect = item.querySelector('.product-select');
            const quantityInput = item.querySelector('.quantity-input');
            const priceInput = item.querySelector('.price-input');
            const batchInput = item.querySelector('.batch-input');
            
            // Produit
            if (!productSelect?.value) {
                markInvalid(productSelect, `Produit #${index + 1}: Sélectionnez un produit`);
                isValid = false;
                if (!firstErrorElement) firstErrorElement = productSelect;
            }
            
            // Quantité
            if (!quantityInput?.value || parseFloat(quantityInput.value) < 1) {
                markInvalid(quantityInput, `Produit #${index + 1}: Quantité invalide (min: 1)`);
                isValid = false;
                if (!firstErrorElement) firstErrorElement = quantityInput;
            }
            
            // Prix
            if (!priceInput?.value || parseFloat(priceInput.value) <= 0) {
                markInvalid(priceInput, `Produit #${index + 1}: Prix invalide`);
                isValid = false;
                if (!firstErrorElement) firstErrorElement = priceInput;
            }
            
            // Lot
            if (!batchInput?.value || batchInput.value.trim() === '') {
                markInvalid(batchInput, `Produit #${index + 1}: Numéro de lot requis`);
                isValid = false;
                if (!firstErrorElement) firstErrorElement = batchInput;
            }
        });
        
        // 4. Validation du fournisseur
        const supplierSelect = document.querySelector('select[name="purchase[supplier]"]');
        if (!supplierSelect?.value) {
            markInvalid(supplierSelect, 'Veuillez sélectionner un fournisseur');
            isValid = false;
            if (!firstErrorElement) firstErrorElement = supplierSelect;
        }
        
        // 5. Si invalide, afficher erreur et empêcher la soumission
        if (!isValid) {
            e.preventDefault();
            showAlert('danger', 'Veuillez corriger les erreurs dans le formulaire');
            
            // Scroll vers la première erreur
            if (firstErrorElement) {
                firstErrorElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstErrorElement.focus();
            }
            
            return false;
        }
        
        // 6. Validation réussie - CORRECTION : Laisser Symfony gérer la soumission
        console.log('✅ Validation réussie, soumission autorisée');
        
        // Désactiver le bouton pour éviter les doubles soumissions
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Enregistrement en cours...';
        }
        
        // Laisser le formulaire se soumettre normalement
        return true;
    });
    
    // ============================================
    // FONCTIONS UTILITAIRES
    // ============================================
    
    function markInvalid(element, message) {
        if (element) {
            element.classList.add('is-invalid');
            
            // Ajouter le message d'erreur
            let errorDiv = element.nextElementSibling;
            if (!errorDiv || !errorDiv.classList.contains('invalid-feedback')) {
                errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                element.parentNode.appendChild(errorDiv);
            }
            errorDiv.textContent = message;
        }
    }
    
    function showAlert(type, message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-3`;
        alertDiv.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="fas fa-${type === 'danger' ? 'exclamation-triangle' : 'info-circle'} me-2"></i>
                <span>${message}</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        const container = document.querySelector('.container-fluid');
        if (container) {
            container.insertBefore(alertDiv, container.firstChild);
            
            // Auto-dismiss après 5 secondes
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    const bsAlert = new bootstrap.Alert(alertDiv);
                    bsAlert.close();
                }
            }, 5000);
        }
    }
    
    // ============================================
    // INITIALISATION FINALE
    // ============================================
    
    // Initialiser les produits existants
    document.querySelectorAll('.purchase-item').forEach((item, index) => {
        initProductItem(item, index);
    });
    
    // Mettre à jour les totaux
    updateTotals();
    
    // Cacher le bouton ajouter si mode produit unique
    if (isSingleProduct && addProductBtn) {
        addProductBtn.style.display = 'none';
    }
    
    console.log('✅ Script purchase_form.js initialisé avec succès');
});