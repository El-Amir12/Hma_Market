// assets/js/purchase.js
import { Controller } from '@hotwired/stimulus';
import TomSelect from 'tom-select';

export default class extends Controller {
    static targets = ['itemsCount', 'grandTotal'];
    
    connect() {
        console.log('Purchase controller connecté');
        this.calculateGrandTotal();
        this.updateItemsCount();
        this.initProductSelects();
        this.initEventListeners();
        this.setupCancelConfirmation();
        this.setupAddItemButton();
        this.setupRemoveButtons();
    }
    
    initEventListeners() {
        // Écouter les changements de quantité et prix
        document.addEventListener('change', (e) => {
            if (e.target.classList.contains('quantity') || 
                e.target.classList.contains('unit-price')) {
                this.calculateTotal(e);
            }
        });
        
        // Écouter l'input pour un calcul en temps réel
        document.addEventListener('input', (e) => {
            if (e.target.classList.contains('quantity') || 
                e.target.classList.contains('unit-price')) {
                this.calculateTotal(e);
            }
        });
    }
    
    setupAddItemButton() {
        const addButton = document.getElementById('add-item-btn');
        if (addButton) {
            addButton.addEventListener('click', (e) => {
                e.preventDefault();
                this.addItem(e);
            });
        }
    }
    
    setupRemoveButtons() {
        document.addEventListener('click', (e) => {
            if (e.target.closest('.remove-item-btn')) {
                e.preventDefault();
                const button = e.target.closest('.remove-item-btn');
                this.removeItem({ 
                    currentTarget: button,
                    preventDefault: () => {}
                });
            }
        });
    }
    
    addItem(event) {
        event.preventDefault();
        
        const itemsContainer = document.getElementById('purchase-items');
        if (!itemsContainer) {
            console.error('Conteneur des produits non trouvé');
            return;
        }
        
        const index = itemsContainer.dataset.index || document.querySelectorAll('.purchase-item').length;
        const prototype = itemsContainer.dataset.prototype;
        
        if (!prototype) {
            console.error('Prototype non trouvé');
            // Créer un formulaire manuellement
            this.createItemManually(parseInt(index));
            return;
        }
        
        // Remplacer les placeholders dans le prototype
        const newForm = prototype
            .replace(/__name__label__/g, `Produit #${parseInt(index) + 1}`)
            .replace(/__name__/g, index);
        
        const newItem = document.createElement('div');
        newItem.className = 'purchase-item card mb-3';
        newItem.setAttribute('data-index', index);
        newItem.innerHTML = `
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h6 class="mb-0">Produit #${parseInt(index) + 1}</h6>
                <button type="button" class="btn btn-danger btn-sm remove-item-btn" 
                        data-index="${index}">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            <div class="card-body">
                ${newForm}
            </div>
        `;
        
        // Supprimer l'alerte "Aucun produit" si elle existe
        const alert = itemsContainer.querySelector('.alert');
        if (alert) {
            alert.remove();
        }
        
        itemsContainer.appendChild(newItem);
        itemsContainer.dataset.index = parseInt(index) + 1;
        
        // Réinitialiser les sélecteurs pour le nouvel élément
        this.initProductSelects();
        this.updateItemsCount();
        
        // Ajouter des écouteurs d'événements au nouvel élément
        const quantityInput = newItem.querySelector('.quantity');
        const unitPriceInput = newItem.querySelector('.unit-price');
        
        if (quantityInput) {
            quantityInput.addEventListener('input', (e) => this.calculateTotal(e));
            quantityInput.addEventListener('change', (e) => this.calculateTotal(e));
        }
        if (unitPriceInput) {
            unitPriceInput.addEventListener('input', (e) => this.calculateTotal(e));
            unitPriceInput.addEventListener('change', (e) => this.calculateTotal(e));
        }
        
        // Focus sur le premier champ
        setTimeout(() => {
            const productSelect = newItem.querySelector('.product-autocomplete');
            if (productSelect) {
                productSelect.focus();
            }
        }, 100);
    }
    
    createItemManually(index) {
        const itemsContainer = document.getElementById('purchase-items');
        if (!itemsContainer) return;
        
        const newItem = document.createElement('div');
        newItem.className = 'purchase-item card mb-3';
        newItem.setAttribute('data-index', index);
        newItem.innerHTML = `
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h6 class="mb-0">Produit #${parseInt(index) + 1}</h6>
                <button type="button" class="btn btn-danger btn-sm remove-item-btn" 
                        data-index="${index}">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Produit</label>
                            <select name="purchase[purchaseItems][${index}][product]" 
                                    class="form-select product-autocomplete" required>
                                <option value="">Sélectionner un produit...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Numéro de lot</label>
                            <input type="text" name="purchase[purchaseItems][${index}][batch_number]" 
                                   class="form-control batch-number" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Quantité</label>
                            <input type="number" name="purchase[purchaseItems][${index}][quantity]" 
                                   class="form-control quantity" min="1" value="1" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Prix unitaire (FCFA)</label>
                            <input type="number" name="purchase[purchaseItems][${index}][unit_price]" 
                                   class="form-control unit-price" min="0" step="0.01" required>
                        </div>
                    </div>
                    <div class="col-md-3 expiry-fields" style="display: none;">
                        <div class="mb-3">
                            <label class="form-label">Date d'expiration</label>
                            <input type="date" name="purchase[purchaseItems][${index}][expiry_date]" 
                                   class="form-control expiry-date">
                        </div>
                    </div>
                    <div class="col-md-3 expiry-fields" style="display: none;">
                        <div class="mb-3">
                            <label class="form-label">Date de fabrication</label>
                            <input type="date" name="purchase[purchaseItems][${index}][manufacturing_date]" 
                                   class="form-control manufacturing-date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Total</label>
                            <input type="text" class="form-control item-total" 
                                   value="0.00" readonly>
                            <input type="hidden" name="purchase[purchaseItems][${index}][total_price]" 
                                   class="total-price-hidden" value="0.00">
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        // Supprimer l'alerte "Aucun produit" si elle existe
        const alert = itemsContainer.querySelector('.alert');
        if (alert) {
            alert.remove();
        }
        
        itemsContainer.appendChild(newItem);
        itemsContainer.dataset.index = parseInt(index) + 1;
        
        this.initProductSelects();
        this.updateItemsCount();
        
        // Focus sur le sélecteur de produit
        setTimeout(() => {
            const productSelect = newItem.querySelector('.product-autocomplete');
            if (productSelect) productSelect.focus();
        }, 100);
    }
    
    removeItem(event) {
        const button = event.currentTarget;
        const index = button.getAttribute('data-index');
        const item = document.querySelector(`.purchase-item[data-index="${index}"]`);
        
        if (!item) return;
        
        // Confirmation
        if (!confirm('Voulez-vous vraiment supprimer ce produit ?')) {
            return;
        }
        
        item.remove();
        this.reindexItems();
        this.calculateGrandTotal();
        this.updateItemsCount();
    }
    
    reindexItems() {
        const items = document.querySelectorAll('.purchase-item');
        const itemsContainer = document.getElementById('purchase-items');
        
        items.forEach((item, index) => {
            item.setAttribute('data-index', index);
            
            // Mettre à jour le titre
            const title = item.querySelector('.card-header h6');
            if (title) {
                title.textContent = `Produit #${index + 1}`;
            }
            
            // Mettre à jour l'index du bouton de suppression
            const removeBtn = item.querySelector('.remove-item-btn');
            if (removeBtn) {
                removeBtn.setAttribute('data-index', index);
            }
            
            // Mettre à jour les noms des champs
            this.updateFieldNames(item, index);
        });
        
        // Mettre à jour l'index dans le conteneur
        if (itemsContainer) {
            itemsContainer.dataset.index = items.length;
            
            // Afficher l'alerte si aucun produit
            if (items.length === 0) {
                itemsContainer.innerHTML = `
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Aucun produit ajouté. Cliquez sur "Ajouter un produit" pour commencer.
                    </div>
                `;
            }
        }
    }
    
    updateFieldNames(itemElement, newIndex) {
        // Mettre à jour les noms de tous les champs d'entrée
        const inputs = itemElement.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            const oldName = input.getAttribute('name');
            if (oldName) {
                // Remplacer l'ancien index par le nouveau
                const newName = oldName.replace(/\[purchaseItems\]\[\d+\]/, `[purchaseItems][${newIndex}]`);
                input.setAttribute('name', newName);
            }
            
            const oldId = input.getAttribute('id');
            if (oldId) {
                const newId = oldId.replace(/_\d+_/, `_${newIndex}_`);
                input.setAttribute('id', newId);
            }
        });
    }
    
    calculateTotal(event) {
        let itemElement;
        
        // Trouver l'élément parent selon la source de l'événement
        if (event.target) {
            itemElement = event.target.closest('.purchase-item');
        } else if (event.currentTarget) {
            itemElement = event.currentTarget.closest('.purchase-item');
        } else {
            return;
        }
        
        if (!itemElement) return;
        
        const quantityInput = itemElement.querySelector('.quantity');
        const unitPriceInput = itemElement.querySelector('.unit-price');
        const totalInput = itemElement.querySelector('.item-total');
        const totalHiddenInput = itemElement.querySelector('.total-price-hidden') || 
                                itemElement.querySelector('[id$="total_price"]');
        
        if (!quantityInput || !unitPriceInput || !totalInput) return;
        
        const quantity = parseFloat(quantityInput.value) || 0;
        const unitPrice = parseFloat(unitPriceInput.value) || 0;
        const total = (quantity * unitPrice).toFixed(2);
        
        totalInput.value = total;
        
        // Mettre à jour le champ caché du total
        if (totalHiddenInput) {
            totalHiddenInput.value = total;
        }
        
        this.calculateGrandTotal();
    }
    
    calculateGrandTotal() {
        let grandTotal = 0;
        const itemTotals = document.querySelectorAll('.item-total');
        
        itemTotals.forEach(input => {
            const value = parseFloat(input.value) || 0;
            if (!isNaN(value)) {
                grandTotal += value;
            }
        });
        
        // Mettre à jour l'affichage
        if (this.hasGrandTotalTarget) {
            this.grandTotalTarget.textContent = `${grandTotal.toFixed(2)} FCFA`;
        } else {
            const grandTotalElement = document.getElementById('grand-total');
            if (grandTotalElement) {
                grandTotalElement.textContent = `${grandTotal.toFixed(2)} FCFA`;
            }
        }
        
        // Mettre à jour le champ caché du total général
        const grandTotalHidden = document.getElementById('purchase_total_amount');
        if (grandTotalHidden) {
            grandTotalHidden.value = grandTotal.toFixed(2);
        }
    }
    
    updateItemsCount() {
        const count = document.querySelectorAll('.purchase-item').length;
        if (this.hasItemsCountTarget) {
            this.itemsCountTarget.textContent = count;
        } else {
            const itemsCountElement = document.getElementById('items-count');
            if (itemsCountElement) {
                itemsCountElement.textContent = count;
            }
        }
    }
    
    initProductSelects() {
        document.querySelectorAll('.product-autocomplete').forEach(select => {
            // Vérifier si TomSelect est déjà initialisé sur cet élément
            if (select.tomselect) {
                select.tomselect.destroy();
                delete select.tomselect;
            }
            
            const tomSelect = new TomSelect(select, {
                valueField: 'id',
                labelField: 'name',
                searchField: ['name', 'barcode'],
                create: false,
                maxOptions: 10,
                placeholder: 'Rechercher un produit...',
                closeAfterSelect: true,
                loadThrottle: 300,
                
                load: (query, callback) => {
                    if (query.length < 2) {
                        callback();
                        return;
                    }
                    
                    fetch(`/admin/purchase/api/search-products?q=${encodeURIComponent(query)}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Erreur réseau');
                            }
                            return response.json();
                        })
                        .then(json => {
                            callback(json);
                        })
                        .catch(error => {
                            console.error('Erreur lors de la recherche:', error);
                            callback();
                        });
                },
                
                render: {
                    option: (item, escape) => {
                        return `
                            <div class="d-flex flex-column">
                                <div class="fw-bold">${escape(item.name)}</div>
                                <div class="text-muted small">
                                    <span class="me-2">Code: ${escape(item.barcode || 'N/A')}</span>
                                    <span class="me-2">Stock: ${item.stock_quantity || 0}</span>
                                    <span>Prix: ${item.purchase_price || 0} FCFA</span>
                                </div>
                            </div>
                        `;
                    },
                    
                    item: (item, escape) => {
                        return `<div>${escape(item.name)} (${escape(item.barcode || 'N/A')})</div>`;
                    },
                    
                    no_results: (data, escape) => {
                        return '<div class="no-results">Aucun produit trouvé</div>';
                    }
                },
                
                onChange: (value) => {
                    if (value) {
                        const selectElement = tomSelect.wrapper.querySelector('select');
                        const itemElement = selectElement.closest('.purchase-item');
                        this.loadSelectedProduct(value, itemElement, tomSelect);
                    }
                },
                
                onInitialize: function() {
                    // Marquer comme initialisé
                    select.tomselect = this;
                }
            });
        });
    }
    
    async loadSelectedProduct(productId, itemElement, tomSelect) {
        try {
            const response = await fetch(`/admin/purchase/api/product-details/${productId}`);
            if (!response.ok) {
                throw new Error('Produit non trouvé');
            }
            
            const product = await response.json();
            
            if (!product) {
                throw new Error('Produit non trouvé');
            }
            
            // Afficher/masquer les champs de dates d'expiration
            const expiryFields = itemElement.querySelectorAll('.expiry-fields');
            if (product.has_expiry_date) {
                expiryFields.forEach(field => {
                    field.style.display = 'block';
                });
            } else {
                expiryFields.forEach(field => {
                    field.style.display = 'none';
                });
            }
            
            // Pré-remplir le prix d'achat
            const unitPriceInput = itemElement.querySelector('.unit-price');
            if (unitPriceInput && !unitPriceInput.value && product.purchase_price) {
                unitPriceInput.value = product.purchase_price;
                // Déclencher le calcul
                setTimeout(() => {
                    unitPriceInput.dispatchEvent(new Event('input'));
                }, 100);
            }
            
            // Générer automatiquement le numéro de lot
            const batchInput = itemElement.querySelector('.batch-number');
            if (batchInput && !batchInput.value) {
                try {
                    const batchResponse = await fetch('/admin/purchase/api/generate-batch-number');
                    if (batchResponse.ok) {
                        const batchData = await batchResponse.json();
                        batchInput.value = batchData.batch_number;
                    }
                } catch (error) {
                    console.warn('Impossible de générer le numéro de lot:', error);
                    // Générer un numéro de lot local
                    batchInput.value = `LOT-${Date.now()}-${Math.random().toString(36).substr(2, 6).toUpperCase()}`;
                }
            }
            
            // Définir la quantité par défaut à 1
            setTimeout(() => {
                const quantityInput = itemElement.querySelector('.quantity');
                if (quantityInput && !quantityInput.value) {
                    quantityInput.value = 1;
                    quantityInput.dispatchEvent(new Event('input'));
                }
                this.calculateTotal({ target: itemElement });
            }, 100);
            
        } catch (error) {
            console.error('Erreur lors du chargement du produit:', error);
            
            // Réinitialiser le sélecteur en cas d'erreur
            if (tomSelect) {
                tomSelect.clear();
            }
            
            // Afficher un message d'erreur temporaire
            const errorDiv = document.createElement('div');
            errorDiv.className = 'alert alert-danger mt-2';
            errorDiv.textContent = 'Erreur lors du chargement du produit';
            itemElement.querySelector('.card-body').appendChild(errorDiv);
            
            setTimeout(() => {
                if (errorDiv.parentNode) {
                    errorDiv.parentNode.removeChild(errorDiv);
                }
            }, 3000);
        }
    }
    
    setupCancelConfirmation() {
        const cancelLinks = document.querySelectorAll('a[href*="purchase_index"], a.btn-outline-secondary');
        
        cancelLinks.forEach(link => {
            // Vérifier si le lien pointe vers la liste des réceptions
            if (link.href.includes('app_admin_purchase_index')) {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.showCancelConfirmation(link.href);
                });
            }
        });
    }
    
    showCancelConfirmation(cancelUrl) {
        // Vérifier s'il y a des données saisies
        const hasData = this.hasFormData();
        
        if (!hasData) {
            // Pas de données, rediriger directement
            window.location.href = cancelUrl;
            return;
        }
        
        // Créer le modal de confirmation
        const modal = document.createElement('div');
        modal.className = 'modal fade';
        modal.setAttribute('tabindex', '-1');
        modal.innerHTML = `
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="fas fa-exclamation-triangle text-warning me-2"></i>
                            Confirmation d'annulation
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-3">Êtes-vous sûr de vouloir quitter cette page ?</p>
                        <div class="alert alert-warning">
                            <i class="fas fa-info-circle me-2"></i>
                            Toutes les données saisies seront perdues.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>
                            Continuer la saisie
                        </button>
                        <a href="${cancelUrl}" class="btn btn-danger" id="confirmCancel">
                            <i class="fas fa-trash me-2"></i>
                            Quitter sans sauvegarder
                        </a>
                    </div>
                </div>
            </div>
        `;
        
        document.body.appendChild(modal);
        
        // Initialiser le modal Bootstrap
        const modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
        
        // Gérer la confirmation
        modal.querySelector('#confirmCancel').addEventListener('click', () => {
            window.location.href = cancelUrl;
        });
        
        // Nettoyer après fermeture
        modal.addEventListener('hidden.bs.modal', () => {
            document.body.removeChild(modal);
        });
    }
    
    hasFormData() {
        // Vérifier s'il y a des données dans le formulaire
        const form = document.querySelector('form');
        if (!form) return false;
        
        // Vérifier les champs de saisie
        const inputs = form.querySelectorAll('input[type="text"], input[type="number"], select, textarea');
        for (let input of inputs) {
            if (input.value && input.value.trim() !== '' && 
                !input.hasAttribute('readonly') && 
                !input.classList.contains('item-total')) {
                return true;
            }
        }
        
        return false;
    }
    
    // Méthode pour recalculer tous les totaux
    recalculateAll() {
        const items = document.querySelectorAll('.purchase-item');
        items.forEach(item => {
            const quantityInput = item.querySelector('.quantity');
            const unitPriceInput = item.querySelector('.unit-price');
            
            if (quantityInput && unitPriceInput) {
                // Déclencher le calcul pour chaque item
                this.calculateTotal({ target: item });
            }
        });
        
        this.calculateGrandTotal();
        this.updateItemsCount();
    }
}