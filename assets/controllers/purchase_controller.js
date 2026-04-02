// assets/controllers/purchase_controller.js
import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['productSearch', 'productResults', 'cartContainer', 'cartTotal', 'cartCount'];
    static values = {
        searchUrl: String,
        addUrl: String,
        removeUrl: String,
        updateUrl: String,
        confirmUrl: String
    };

    connect() {
        console.log('Purchase controller connected');
        this.initBarcodeScanner();
        this.initSearch();
        
        // Rendre le contrôleur accessible globalement
        if (window.purchaseController === null || window.purchaseController === undefined) {
            window.purchaseController = this;
        }
        
        // Charger le panier au démarrage
        this.refreshCart();
    }
    
    disconnect() {
        if (window.purchaseController === this) {
            window.purchaseController = null;
        }
    }

    // ==================== RECHERCHE ====================
    
    initSearch() {
        const searchInput = this.productSearchTarget;
        if (searchInput) {
            searchInput.addEventListener('input', (event) => {
                this.searchProducts(event);
            });
        }
    }
    
    async searchProducts(event) {
        const query = event.target.value;
        
        if (query.length < 2) {
            this.productResultsTarget.innerHTML = '';
            return;
        }
        
        try {
            const response = await fetch(`${this.searchUrlValue}?q=${encodeURIComponent(query)}`);
            const products = await response.json();
            this.displaySearchResults(products);
        } catch (error) {
            console.error('Erreur lors de la recherche:', error);
        }
    }

    displaySearchResults(products) {
        if (!products.length) {
            this.productResultsTarget.innerHTML = `
                <div class="text-center py-4 text-muted">
                    <i class="bi bi-search fs-1"></i>
                    <p class="mt-2">Aucun produit trouvé</p>
                </div>
            `;
            return;
        }
        
        const resultsHtml = products.map(product => `
            <div class="product-result-item p-3 border-bottom hover-bg-light cursor-pointer" 
                 data-product-id="${product.id}"
                 data-product-name="${this.escapeHtml(product.name)}"
                 data-product-barcode="${product.barcode}"
                 data-product-price="${product.purchase_price}"
                 data-product-image="${product.image || '/images/no-image.png'}"
                 data-has-expiry="${product.has_expiry_date}"
                 data-unit="${product.unit || ''}"
                 onclick="window.purchaseController.selectProduct(this)">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="${product.image ? '/uploads/products/' + product.image : '/images/no-image.png'}" 
                             alt="${this.escapeHtml(product.name)}" 
                             class="product-thumbnail rounded"
                             style="width: 50px; height: 50px; object-fit: cover;">
                    </div>
                    <div class="col">
                        <div class="fw-bold">${this.escapeHtml(product.name)}</div>
                        <div class="small text-muted">
                            <i class="bi bi-upc-scan"></i> ${product.barcode}
                            ${product.unit ? `<span class="ms-2"><i class="bi bi-rulers"></i> ${product.unit}</span>` : ''}
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="fw-bold text-primary">${this.formatPrice(product.purchase_price)} FCFA</div>
                        <div class="small text-muted">
                            ${product.has_expiry_date ? '<span class="badge bg-warning text-dark">Périssable</span>' : ''}
                        </div>
                    </div>
                </div>
            </div>
        `).join('');
        
        this.productResultsTarget.innerHTML = `
            <div class="list-group list-group-flush">
                ${resultsHtml}
            </div>
        `;
    }

    // ==================== SCAN CODE-BARRES ====================
    
    initBarcodeScanner() {
        let barcodeBuffer = '';
        let barcodeTimeout = null;
        
        document.addEventListener('keydown', (event) => {
            // Ignorer si un input est focus
            if (event.target.tagName === 'INPUT' || event.target.tagName === 'TEXTAREA' || event.target.tagName === 'SELECT') {
                return;
            }
            
            // Accumuler les caractères
            if (event.key.length === 1) {
                barcodeBuffer += event.key;
                
                clearTimeout(barcodeTimeout);
                barcodeTimeout = setTimeout(() => {
                    if (barcodeBuffer.length > 3) {
                        this.processBarcode(barcodeBuffer);
                    }
                    barcodeBuffer = '';
                }, 100);
            }
        });
        
        // Bouton scanner manuel
        const scanBtn = document.getElementById('scanBarcodeBtn');
        if (scanBtn) {
            scanBtn.addEventListener('click', () => {
                const barcode = prompt('Entrez le code-barres à scanner:');
                if (barcode && barcode.length > 3) {
                    this.processBarcode(barcode);
                }
            });
        }
    }
    
    async processBarcode(barcode) {
        console.log('Scanning barcode:', barcode);
        
        try {
            const response = await fetch(`/api/products/search/barcode?barcode=${encodeURIComponent(barcode)}`);
            const product = await response.json();
            
            if (product.error) {
                this.showToast('error', product.error);
                return;
            }
            
            this.showAddProductModal(product);
        } catch (error) {
            console.error('Erreur scan code-barres:', error);
            this.showToast('error', 'Produit non trouvé');
        }
    }

    // ==================== GESTION DU PANIER ====================
    
    selectProduct(element) {
        const product = {
            id: parseInt(element.dataset.productId),
            name: element.dataset.productName,
            barcode: element.dataset.productBarcode,
            purchase_price: parseFloat(element.dataset.productPrice),
            image: element.dataset.productImage,
            has_expiry_date: element.dataset.hasExpiry === 'true',
            unit: element.dataset.unit
        };
        
        this.showAddProductModal(product);
    }
    
    showAddProductModal(product) {
        const modalHtml = `
            <div class="modal fade" id="addProductModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter au panier</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center mb-3">
                                <img src="${product.image}" 
                                     alt="${this.escapeHtml(product.name)}" 
                                     class="img-fluid rounded"
                                     style="max-height: 150px;">
                            </div>
                            <h6 class="text-center">${this.escapeHtml(product.name)}</h6>
                            <p class="text-center text-muted small">${product.barcode}</p>
                            
                            <div class="mb-3">
                                <label class="form-label">Quantité</label>
                                <input type="number" 
                                       id="productQuantity" 
                                       class="form-control" 
                                       value="1" 
                                       min="1">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Prix unitaire (FCFA)</label>
                                <input type="number" 
                                       id="productPrice" 
                                       class="form-control" 
                                       value="${product.purchase_price}" 
                                       step="0.01">
                            </div>
                            
                            ${product.has_expiry_date ? `
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle"></i>
                                Ce produit est périssable. Le numéro de lot sera généré à la réception.
                            </div>
                            ` : ''}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary" onclick="window.purchaseController.addProductFromModal(${product.id})">
                                <i class="bi bi-cart-plus"></i> Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        // Supprimer l'ancien modal s'il existe
        const existingModal = document.getElementById('addProductModal');
        if (existingModal) existingModal.remove();
        
        // Ajouter le nouveau modal
        document.body.insertAdjacentHTML('beforeend', modalHtml);
        
        // Afficher le modal
        const modal = new bootstrap.Modal(document.getElementById('addProductModal'));
        modal.show();
        
        this.currentProduct = product;
    }
    
    addProductFromModal(productId) {
        const quantity = parseInt(document.getElementById('productQuantity').value);
        const unitPrice = parseFloat(document.getElementById('productPrice').value);
        
        if (quantity < 1) {
            this.showToast('error', 'La quantité doit être supérieure à 0');
            return;
        }
        
        this.addToCart(productId, quantity, unitPrice);
    }
    
    async addToCart(productId, quantity, unitPrice) {
        const formData = new FormData();
        formData.append('product_id', productId);
        formData.append('quantity', quantity);
        formData.append('unit_price', unitPrice);
        
        try {
            const response = await fetch(this.addUrlValue, {
                method: 'POST',
                body: formData
            });
            
            const data = await response.json();
            
            if (data.success) {
                await this.refreshCart();
                this.showToast('success', 'Produit ajouté au panier');
                this.closeModal('addProductModal');
            } else {
                this.showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur ajout panier:', error);
            this.showToast('error', 'Erreur lors de l\'ajout au panier');
        }
    }
    
    async refreshCart() {
        try {
            const response = await fetch(this.searchUrlValue.replace('/search-products', '/cart-data'));
            const data = await response.json();
            this.updateCartDisplay(data);
        } catch (error) {
            console.error('Erreur rafraîchissement panier:', error);
        }
    }
    
    updateCartDisplay(cartData) {
        if (!this.hasCartContainerTarget) return;
        
        if (!cartData.items || cartData.items.length === 0) {
            this.cartContainerTarget.innerHTML = `
                <div class="text-center py-5">
                    <i class="bi bi-cart-x fs-1 text-muted"></i>
                    <p class="mt-3 text-muted">Votre panier est vide</p>
                    <button class="btn btn-primary" onclick="document.getElementById('productSearch').focus()">
                        <i class="bi bi-plus-circle"></i> Ajouter des produits
                    </button>
                </div>
            `;
            if (this.hasCartTotalTarget) this.cartTotalTarget.innerHTML = '0 FCFA';
            if (this.hasCartCountTarget) this.cartCountTarget.innerHTML = '0';
            return;
        }
        
        const itemsHtml = cartData.items.map(item => `
            <div class="cart-item d-flex align-items-center p-3 border-bottom" data-product-id="${item.product_id}">
                <div class="flex-shrink-0">
                    <img src="${item.image ? '/uploads/products/' + item.image : '/images/no-image.png'}" 
                         alt="${this.escapeHtml(item.product_name)}" 
                         class="rounded"
                         style="width: 60px; height: 60px; object-fit: cover;">
                </div>
                <div class="flex-grow-1 ms-3">
                    <div class="fw-bold">${this.escapeHtml(item.product_name)}</div>
                    <div class="small text-muted">
                        <i class="bi bi-upc-scan"></i> ${item.barcode}
                        ${item.has_expiry_date ? '<span class="ms-2 badge bg-warning text-dark">Périssable</span>' : ''}
                    </div>
                    <div class="mt-2">
                        <div class="input-group input-group-sm" style="width: 120px;">
                            <button class="btn btn-outline-secondary" type="button" onclick="window.purchaseController.updateQuantity(${item.product_id}, ${item.quantity - 1})">
                                <i class="bi bi-dash"></i>
                            </button>
                            <input type="text" 
                                   class="form-control text-center quantity-input" 
                                   value="${item.quantity}"
                                   data-product-id="${item.product_id}"
                                   onchange="window.purchaseController.updateQuantity(${item.product_id}, this.value)">
                            <button class="btn btn-outline-secondary" type="button" onclick="window.purchaseController.updateQuantity(${item.product_id}, ${item.quantity + 1})">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <div class="fw-bold text-primary">${this.formatPrice(item.total_price)} FCFA</div>
                    <div class="small text-muted">${this.formatPrice(item.unit_price)} FCFA/unité</div>
                    <button class="btn btn-sm btn-danger mt-2" onclick="window.purchaseController.removeFromCart(${item.product_id})">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </div>
        `).join('');
        
        this.cartContainerTarget.innerHTML = itemsHtml;
        if (this.hasCartTotalTarget) this.cartTotalTarget.innerHTML = `${this.formatPrice(cartData.total)} FCFA`;
        if (this.hasCartCountTarget) this.cartCountTarget.innerHTML = cartData.items.length;
    }
    
    async updateQuantity(productId, quantity) {
        quantity = parseInt(quantity);
        if (isNaN(quantity) || quantity < 1) quantity = 1;
        
        const formData = new FormData();
        formData.append('quantity', quantity);
        
        try {
            const response = await fetch(`${this.updateUrlValue}/${productId}`, {
                method: 'PUT',
                body: formData
            });
            
            const data = await response.json();
            
            if (data.success) {
                await this.refreshCart();
            } else {
                this.showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur mise à jour quantité:', error);
        }
    }
    
    async removeFromCart(productId) {
        if (!confirm('Supprimer ce produit du panier ?')) return;
        
        try {
            const response = await fetch(`${this.removeUrlValue}/${productId}`, {
                method: 'DELETE'
            });
            
            const data = await response.json();
            
            if (data.success) {
                await this.refreshCart();
                this.showToast('success', 'Produit supprimé du panier');
            } else {
                this.showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur suppression:', error);
        }
    }

    // ==================== MODAL DE CONFIRMATION ====================
    
    openConfirmationModal() {
        const modalElement = document.getElementById('confirmationModal');
        if (modalElement) {
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }
    }
    
    async confirmPurchase() {
        const form = document.getElementById('confirmationForm');
        if (!form) return;
        
        const formData = new FormData(form);
        
        try {
            const response = await fetch(this.confirmUrlValue, {
                method: 'POST',
                body: formData
            });
            
            const data = await response.json();
            
            if (data.success) {
                this.closeModal('confirmationModal');
                this.showToast('success', data.message);
                setTimeout(() => {
                    window.location.href = data.redirect_url;
                }, 1500);
            } else {
                this.showToast('error', data.error);
            }
        } catch (error) {
            console.error('Erreur confirmation:', error);
            this.showToast('error', 'Erreur lors de la confirmation');
        }
    }

    // ==================== UTILITAIRES ====================
    
    formatPrice(price) {
        return new Intl.NumberFormat('fr-FR').format(price);
    }
    
    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
    
    showToast(type, message) {
        const toastHtml = `
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
                <div class="toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0" role="alert">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i>
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                </div>
            </div>
        `;
        
        const container = document.createElement('div');
        container.innerHTML = toastHtml;
        document.body.appendChild(container);
        
        const toast = new bootstrap.Toast(container.querySelector('.toast'));
        toast.show();
        
        setTimeout(() => {
            container.remove();
        }, 3000);
    }
    
    closeModal(modalId) {
        const modalElement = document.getElementById(modalId);
        if (modalElement) {
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) modal.hide();
            setTimeout(() => {
                modalElement.remove();
            }, 300);
        }
    }
}