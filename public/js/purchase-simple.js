// public/js/purchase-modern.js
class ModernPurchaseController {
    constructor() {
        console.log('🎯 Modern Purchase Controller initialisé');
        this.init();
    }
    
    init() {
        this.setupAddItemButton();
        this.setupEventListeners();
        this.initProductSelects();
        this.calculateAllTotals();
        this.setupCancelConfirmation();
        this.setupRealTimeValidation();
        this.updateUI();
    }
    
    setupAddItemButton() {
        const addButton = document.getElementById('add-item-btn');
        if (addButton) {
            addButton.addEventListener('click', (e) => {
                e.preventDefault();
                this.addItem();
            });
        }
    }
    
    addItem() {
        const itemsContainer = document.getElementById('purchase-items');
        if (!itemsContainer) return;
        
        const itemCount = document.querySelectorAll('.purchase-item').length;
        const index = itemCount;
        
        // Créer le nouvel item
        const newItem = this.createItemHtml(index);
        
        // Supprimer le message d'absence de produit
        const emptyMessage = itemsContainer.querySelector('.empty-state');
        if (emptyMessage) {
            emptyMessage.remove();
        }
        
        // Ajouter avec animation
        itemsContainer.insertAdjacentHTML('beforeend', newItem);
        
        // Animer l'entrée
        const itemElement = itemsContainer.querySelector(`.purchase-item[data-index="${index}"]`);
        if (itemElement) {
            itemElement.style.opacity = '0';
            itemElement.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                itemElement.style.transition = 'all 0.3s ease';
                itemElement.style.opacity = '1';
                itemElement.style.transform = 'translateY(0)';
            }, 10);
        }
        
        // Initialiser
        this.initProductSelects();
        this.updateUI();
        
        // Focus
        setTimeout(() => {
            const productSelect = itemElement.querySelector('.product-autocomplete');
            if (productSelect) {
                productSelect.focus();
                productSelect.dispatchEvent(new Event('focus'));
            }
        }, 50);
        
        console.log(`➕ Produit #${index + 1} ajouté`);
    }
    
    createItemHtml(index) {
        const today = new Date().toISOString().split('T')[0];
        const tomorrow = new Date(Date.now() + 86400000).toISOString().split('T')[0];
        
        return `
        <div class="purchase-item card border-0 shadow-sm mb-3" data-index="${index}">
            <div class="card-header bg-gradient-light border-0 d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center">
                    <div class="item-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">
                        ${index + 1}
                    </div>
                    <h6 class="mb-0 fw-semibold text-dark">Produit #${index + 1}</h6>
                </div>
                <button type="button" class="btn btn-sm btn-outline-danger remove-item-btn" data-index="${index}">
                    <i class="fas fa-trash-alt me-1"></i>Supprimer
                </button>
            </div>
            
            <div class="card-body py-4">
                <div class="row g-3">
                    <!-- Produit -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label fw-semibold text-dark mb-2">
                                <i class="fas fa-box text-primary me-2"></i>Produit *
                            </label>
                            <select name="purchase[purchaseItems][${index}][product]" 
                                    class="form-select form-select-lg product-autocomplete shadow-sm" required>
                                <option value="">Sélectionner un produit...</option>
                            </select>
                            <div class="form-text text-muted mt-1">
                                <i class="fas fa-search me-1"></i>Recherchez par nom ou code-barres
                            </div>
                        </div>
                    </div>
                    
                    <!-- Numéro de lot -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label fw-semibold text-dark mb-2">
                                <i class="fas fa-barcode text-success me-2"></i>Numéro de lot *
                            </label>
                            <div class="input-group input-group-lg shadow-sm">
                                <input type="text" name="purchase[purchaseItems][${index}][batch_number]" 
                                       class="form-control batch-number" required
                                       placeholder="Généré automatiquement">
                                <button type="button" class="btn btn-outline-secondary generate-batch-btn" data-index="${index}">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quantité -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label fw-semibold text-dark mb-2">
                                <i class="fas fa-cubes text-warning me-2"></i>Quantité *
                            </label>
                            <div class="input-group input-group-lg shadow-sm">
                                <input type="number" name="purchase[purchaseItems][${index}][quantity]" 
                                       class="form-control quantity" min="1" value="1" required
                                       step="1">
                                <span class="input-group-text bg-light fw-semibold">unités</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Prix unitaire -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label fw-semibold text-dark mb-2">
                                <i class="fas fa-money-bill-wave text-info me-2"></i>Prix unitaire *
                            </label>
                            <div class="input-group input-group-lg shadow-sm">
                                <input type="number" name="purchase[purchaseItems][${index}][unit_price]" 
                                       class="form-control unit-price" min="0" step="0.01" required
                                       placeholder="0.00">
                                <span class="input-group-text bg-light fw-semibold">FCFA</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section Dates (cachée par défaut) -->
                    <div class="col-md-6">
                        <div class="dates-section" style="display: none;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label fw-semibold text-dark mb-2">
                                            <i class="fas fa-calendar-alt text-danger me-2"></i>Date d'expiration
                                        </label>
                                        <input type="date" name="purchase[purchaseItems][${index}][expiry_date]" 
                                               class="form-control form-control-lg expiry-date shadow-sm"
                                               min="${tomorrow}">
                                        <div class="form-text text-muted mt-1">
                                            Pour produits périssables uniquement
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label fw-semibold text-dark mb-2">
                                            <i class="fas fa-industry text-warning me-2"></i>Date de fabrication
                                        </label>
                                        <input type="date" name="purchase[purchaseItems][${index}][manufacturing_date]" 
                                               class="form-control form-control-lg manufacturing-date shadow-sm"
                                               max="${today}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Total -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label fw-semibold text-dark mb-2">
                                <i class="fas fa-calculator text-success me-2"></i>Total
                            </label>
                            <div class="total-display input-group input-group-lg shadow-sm">
                                <span class="input-group-text bg-gradient-primary text-white fw-bold">
                                    <i class="fas fa-coins me-2"></i>Total
                                </span>
                                <input type="text" class="form-control item-total fw-bold fs-4 text-center" 
                                       value="0.00" readonly>
                                <span class="input-group-text bg-light fw-bold">FCFA</span>
                                <input type="hidden" name="purchase[purchaseItems][${index}][total_price]" 
                                       class="total-price-hidden" value="0.00">
                            </div>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
    }
    
    initProductSelects() {
        document.querySelectorAll('.product-autocomplete:not([data-initialized])').forEach(select => {
            select.setAttribute('data-initialized', 'true');
            
            const tomSelect = new TomSelect(select, {
                valueField: 'id',
                labelField: 'name',
                searchField: ['name', 'barcode'],
                create: false,
                maxOptions: 8,
                placeholder: 'Tapez pour rechercher...',
                hideSelected: true,
                closeAfterSelect: true,
                
                load: (query, callback) => {
                    if (query.length < 2) {
                        callback();
                        return;
                    }
                    
                    // Afficher un indicateur de chargement
                    select.parentElement.classList.add('loading');
                    
                    fetch(`/admin/purchase/api/search-products?q=${encodeURIComponent(query)}`)
                        .then(response => response.json())
                        .then(data => {
                            select.parentElement.classList.remove('loading');
                            callback(data);
                        })
                        .catch(() => {
                            select.parentElement.classList.remove('loading');
                            callback();
                        });
                },
                
                render: {
                    option: (item, escape) => {
                        const stockClass = item.stock_quantity < 10 ? 'text-danger' : 
                                         item.stock_quantity < 50 ? 'text-warning' : 'text-success';
                        
                        return `
                            <div class="product-option p-2 border-bottom">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">${escape(item.name)}</div>
                                        <div class="small text-muted">
                                            <span class="me-3"><i class="fas fa-barcode me-1"></i>${escape(item.barcode || 'N/A')}</span>
                                            <span class="me-3"><i class="fas fa-boxes me-1"></i>Stock: <span class="${stockClass} fw-semibold">${item.stock_quantity}</span></span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="text-success fw-bold">${item.purchase_price} FCFA</div>
                                        <div class="small text-muted">Prix d'achat</div>
                                    </div>
                                </div>
                                ${item.has_expiry_date ? '<div class="badge bg-warning mt-2"><i class="fas fa-clock me-1"></i>Périssable</div>' : ''}
                            </div>
                        `;
                    },
                    
                    item: (item, escape) => {
                        return `<div><span class="fw-semibold">${escape(item.name)}</span> <small class="text-muted">(${escape(item.barcode)})</small></div>`;
                    },
                    
                    no_results: () => {
                        return '<div class="no-results p-3 text-center text-muted"><i class="fas fa-search me-2"></i>Aucun produit trouvé</div>';
                    }
                },
                
                onChange: (value) => {
                    if (value) {
                        this.loadProductDetails(value, select.closest('.purchase-item'));
                    }
                }
            });
            
            // Style personnalisé
            select.parentElement.querySelector('.ts-control').classList.add('form-select-lg', 'shadow-sm');
        });
    }
    
    async loadProductDetails(productId, itemElement) {
        try {
            // Afficher un indicateur de chargement
            const productSelect = itemElement.querySelector('.product-autocomplete');
            productSelect.parentElement.classList.add('loading');
            
            const response = await fetch(`/admin/purchase/api/product-details/${productId}`);
            if (!response.ok) throw new Error('Produit non trouvé');
            
            const product = await response.json();
            
            // Gérer les dates
            const datesSection = itemElement.querySelector('.dates-section');
            if (product.has_expiry_date) {
                datesSection.style.display = 'block';
                datesSection.classList.add('animate__animated', 'animate__fadeIn');
            } else {
                datesSection.style.display = 'none';
            }
            
            // Pré-remplir le prix
            const unitPriceInput = itemElement.querySelector('.unit-price');
            if (unitPriceInput && !unitPriceInput.value && product.purchase_price) {
                unitPriceInput.value = product.purchase_price;
                unitPriceInput.classList.add('is-valid');
                setTimeout(() => unitPriceInput.dispatchEvent(new Event('input')), 100);
            }
            
            // Générer le numéro de lot
            await this.generateBatchNumber(itemElement);
            
            // Mettre à jour l'interface
            this.updateItemValidation(itemElement, true);
            
        } catch (error) {
            console.error('❌ Erreur:', error);
            this.showToast('Erreur de chargement du produit', 'danger');
        } finally {
            const productSelect = itemElement.querySelector('.product-autocomplete');
            productSelect.parentElement.classList.remove('loading');
        }
    }
    
    async generateBatchNumber(itemElement) {
        const batchInput = itemElement.querySelector('.batch-number');
        if (!batchInput.value) {
            try {
                const response = await fetch('/admin/purchase/api/generate-batch-number');
                if (response.ok) {
                    const data = await response.json();
                    batchInput.value = data.batch_number;
                    batchInput.classList.add('is-valid');
                }
            } catch (error) {
                // Génération locale
                const now = new Date();
                const timestamp = now.getTime().toString(36).toUpperCase();
                const random = Math.random().toString(36).substr(2, 4).toUpperCase();
                batchInput.value = `LOT-${now.getFullYear()}${String(now.getMonth()+1).padStart(2,'0')}${String(now.getDate()).padStart(2,'0')}-${random}`;
            }
        }
    }
    
    setupEventListeners() {
        // Calcul en temps réel
        document.addEventListener('input', (e) => {
            if (e.target.classList.contains('quantity') || e.target.classList.contains('unit-price')) {
                this.calculateItemTotal(e.target);
            }
        });
        
        // Boutons de suppression
        document.addEventListener('click', (e) => {
            if (e.target.closest('.remove-item-btn')) {
                e.preventDefault();
                const button = e.target.closest('.remove-item-btn');
                const index = button.getAttribute('data-index');
                this.removeItem(index);
            }
            
            // Générer numéro de lot
            if (e.target.closest('.generate-batch-btn')) {
                e.preventDefault();
                const button = e.target.closest('.generate-batch-btn');
                const index = button.getAttribute('data-index');
                const item = document.querySelector(`.purchase-item[data-index="${index}"]`);
                this.generateBatchNumber(item);
            }
        });
        
        // Validation en temps réel
        document.addEventListener('change', (e) => {
            if (e.target.matches('input, select')) {
                this.validateField(e.target);
            }
        });
    }
    
    calculateItemTotal(input) {
        const itemElement = input.closest('.purchase-item');
        if (!itemElement) return;
        
        const quantity = parseFloat(itemElement.querySelector('.quantity').value) || 0;
        const unitPrice = parseFloat(itemElement.querySelector('.unit-price').value) || 0;
        const total = (quantity * unitPrice).toFixed(2);
        
        // Mettre à jour l'affichage
        const totalInput = itemElement.querySelector('.item-total');
        const totalHidden = itemElement.querySelector('.total-price-hidden');
        const progressBar = itemElement.querySelector('.progress-bar');
        
        if (totalInput) {
            totalInput.value = total;
            
            // Animation du changement
            totalInput.classList.add('pulse');
            setTimeout(() => totalInput.classList.remove('pulse'), 300);
        }
        if (totalHidden) totalHidden.value = total;
        
        // Mettre à jour la barre de progression (basée sur la quantité)
        if (progressBar) {
            const progressWidth = Math.min(quantity * 5, 100);
            progressBar.style.width = `${progressWidth}%`;
            progressBar.textContent = `${quantity} unités`;
        }
        
        // Validation visuelle
        if (quantity > 0 && unitPrice > 0) {
            totalInput.parentElement.classList.add('border-success', 'border-2');
        } else {
            totalInput.parentElement.classList.remove('border-success', 'border-2');
        }
        
        this.calculateGrandTotal();
    }
    
    calculateAllTotals() {
        document.querySelectorAll('.purchase-item').forEach(item => {
            const quantity = parseFloat(item.querySelector('.quantity')?.value) || 0;
            const unitPrice = parseFloat(item.querySelector('.unit-price')?.value) || 0;
            const total = (quantity * unitPrice).toFixed(2);
            
            const totalInput = item.querySelector('.item-total');
            const totalHidden = item.querySelector('.total-price-hidden');
            
            if (totalInput) totalInput.value = total;
            if (totalHidden) totalHidden.value = total;
        });
        
        this.calculateGrandTotal();
        this.updateUI();
    }
    
    calculateGrandTotal() {
        let grandTotal = 0;
        let itemCount = 0;
        
        document.querySelectorAll('.item-total').forEach(input => {
            const value = parseFloat(input.value) || 0;
            if (value > 0) itemCount++;
            grandTotal += value;
        });
        
        // Mettre à jour l'affichage principal
        const grandTotalElement = document.getElementById('grand-total');
        const subtotalElement = document.getElementById('subtotal');
        const taxElement = document.getElementById('tax');
        const itemsCountElement = document.getElementById('items-count');
        
        if (grandTotalElement) {
            grandTotalElement.textContent = `${grandTotal.toFixed(2)} FCFA`;
            grandTotalElement.classList.add('pulse');
            setTimeout(() => grandTotalElement.classList.remove('pulse'), 300);
        }
        
        // Calculer TVA (18%)
        const tax = grandTotal * 0.18;
        const subtotal = grandTotal - tax;
        
        if (subtotalElement) subtotalElement.textContent = `${subtotal.toFixed(2)} FCFA`;
        if (taxElement) taxElement.textContent = `${tax.toFixed(2)} FCFA`;
        if (itemsCountElement) itemsCountElement.textContent = itemCount;
        
        // Mettre à jour le champ caché
        const grandTotalHidden = document.getElementById('purchase_total_amount');
        if (grandTotalHidden) {
            grandTotalHidden.value = grandTotal.toFixed(2);
        }
    }
    
    removeItem(index) {
        if (!confirm('Supprimer ce produit de la réception ?')) return;
        
        const item = document.querySelector(`.purchase-item[data-index="${index}"]`);
        if (item) {
            // Animation de sortie
            item.style.transform = 'translateX(100px)';
            item.style.opacity = '0';
            item.style.transition = 'all 0.3s ease';
            
            setTimeout(() => {
                item.remove();
                this.reindexItems();
                this.calculateGrandTotal();
                this.updateUI();
            }, 300);
        }
    }
    
    reindexItems() {
        const items = document.querySelectorAll('.purchase-item');
        const itemsContainer = document.getElementById('purchase-items');
        
        items.forEach((item, index) => {
            item.setAttribute('data-index', index);
            
            // Mettre à jour le numéro
            const numberBadge = item.querySelector('.item-number');
            if (numberBadge) numberBadge.textContent = index + 1;
            
            // Mettre à jour le titre
            const title = item.querySelector('.card-header h6');
            if (title) title.textContent = `Produit #${index + 1}`;
            
            // Mettre à jour les boutons
            const removeBtn = item.querySelector('.remove-item-btn');
            const generateBtn = item.querySelector('.generate-batch-btn');
            if (removeBtn) removeBtn.setAttribute('data-index', index);
            if (generateBtn) generateBtn.setAttribute('data-index', index);
            
            // Mettre à jour les noms des champs
            this.updateFieldNames(item, index);
        });
        
        // Afficher l'état vide si nécessaire
        if (items.length === 0 && itemsContainer) {
            itemsContainer.innerHTML = `
                <div class="empty-state text-center py-5 my-4">
                    <div class="empty-icon mb-4">
                        <i class="fas fa-box-open fa-4x text-muted opacity-25"></i>
                    </div>
                    <h4 class="text-muted fw-light">Aucun produit ajouté</h4>
                    <p class="text-muted mb-4">Commencez par ajouter vos produits à recevoir</p>
                    <button class="btn btn-primary btn-lg" id="first-add-btn">
                        <i class="fas fa-plus-circle me-2"></i>
                        Ajouter votre premier produit
                    </button>
                </div>`;
            
            document.getElementById('first-add-btn')?.addEventListener('click', () => this.addItem());
        }
    }
    
    updateFieldNames(itemElement, newIndex) {
        const inputs = itemElement.querySelectorAll('[name*="[purchaseItems]"]');
        inputs.forEach(input => {
            const oldName = input.getAttribute('name');
            if (oldName) {
                const newName = oldName.replace(/\[purchaseItems\]\[\d+\]/, `[purchaseItems][${newIndex}]`);
                input.setAttribute('name', newName);
            }
        });
    }
    
    updateUI() {
        const hasItems = document.querySelectorAll('.purchase-item').length > 0;
        
        // Mettre à jour l'état du bouton d'enregistrement
        const submitBtn = document.querySelector('button[type="submit"]');
        if (submitBtn) {
            if (hasItems) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('btn-secondary');
                submitBtn.classList.add('btn-success');
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.remove('btn-success');
                submitBtn.classList.add('btn-secondary');
            }
        }
    }
    
    setupRealTimeValidation() {
        document.addEventListener('blur', (e) => {
            if (e.target.matches('.quantity, .unit-price, .batch-number')) {
                this.validateField(e.target);
            }
        }, true);
    }
    
    validateField(field) {
        const value = field.value.trim();
        const isValid = value !== '' && (field.type !== 'number' || parseFloat(value) > 0);
        
        if (isValid) {
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
        } else {
            field.classList.remove('is-valid');
            field.classList.add('is-invalid');
        }
        
        return isValid;
    }
    
    updateItemValidation(itemElement, isValid) {
        const inputs = itemElement.querySelectorAll('input, select');
        inputs.forEach(input => {
            if (isValid && input.value) {
                input.classList.add('is-valid');
                input.classList.remove('is-invalid');
            }
        });
    }
    
    setupCancelConfirmation() {
        const cancelBtn = document.querySelector('a.btn-outline-secondary');
        if (cancelBtn) {
            cancelBtn.addEventListener('click', (e) => {
                if (this.hasFormData()) {
                    e.preventDefault();
                    this.showCancelModal(cancelBtn.href);
                }
            });
        }
    }
    
    hasFormData() {
        const inputs = document.querySelectorAll('.purchase-item input, .purchase-item select');
        for (let input of inputs) {
            if (input.value && input.value.trim() !== '') {
                return true;
            }
        }
        return false;
    }
    
    showCancelModal(url) {
        const modalHtml = `
            <div class="modal fade" id="cancelModal" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow-lg">
                        <div class="modal-header border-0 bg-gradient-danger text-white">
                            <h5 class="modal-title">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                Annuler la réception
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center py-4">
                            <div class="mb-4">
                                <i class="fas fa-times-circle fa-4x text-danger mb-3"></i>
                                <h4 class="fw-bold">Êtes-vous sûr ?</h4>
                                <p class="text-muted">Tous les produits saisis seront perdus.</p>
                            </div>
                            <div class="alert alert-warning">
                                <i class="fas fa-info-circle me-2"></i>
                                Cette action ne peut pas être annulée.
                            </div>
                        </div>
                        <div class="modal-footer border-0 justify-content-center">
                            <button type="button" class="btn btn-lg btn-outline-secondary px-4" data-bs-dismiss="modal">
                                <i class="fas fa-arrow-left me-2"></i>
                                Continuer
                            </button>
                            <a href="${url}" class="btn btn-lg btn-danger px-4">
                                <i class="fas fa-trash-alt me-2"></i>
                                Annuler la réception
                            </a>
                        </div>
                    </div>
                </div>
            </div>`;
        
        document.body.insertAdjacentHTML('beforeend', modalHtml);
        const modal = new bootstrap.Modal(document.getElementById('cancelModal'));
        modal.show();
        
        document.getElementById('cancelModal').addEventListener('hidden.bs.modal', function() {
            this.remove();
        });
    }
    
    showToast(message, type = 'info') {
        // Vous pouvez implémenter un système de toast si nécessaire
        console.log(`${type.toUpperCase()}: ${message}`);
    }
}

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    window.purchaseApp = new ModernPurchaseController();
});