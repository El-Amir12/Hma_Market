// assets/js/print-manager.js

class PrintManager {
    constructor() {
        this.printQueue = [];
        this.isPrinting = false;
        this.preferences = this.loadPreferences();
        this.init();
    }
    
    init() {
        this.setupEventListeners();
        this.loadPrinterCapabilities();
    }
    
    async loadPrinterCapabilities() {
        // Détection des capacités d'impression du navigateur
        if ('getPrinterCapabilities' in window) {
            try {
                const capabilities = await window.getPrinterCapabilities();
                this.printerCapabilities = capabilities;
                console.log('Imprimante détectée:', capabilities);
            } catch (error) {
                console.log('Aucune imprimante détectée:', error);
                this.printerCapabilities = null;
            }
        } else {
            this.printerCapabilities = null;
        }
    }
    
    setupEventListeners() {
        // 🔥 Correction : Utiliser une fonction fléchée pour garder le contexte 'this'
        const printButtons = document.querySelectorAll('.print-kitchen, .print-customer, .print-cash, .print-delivery, .quick-print');
        
        printButtons.forEach(btn => {
            // Supprimer l'ancien écouteur s'il existe
            btn.removeEventListener('click', this.handlePrintClick);
            // Ajouter le nouvel écouteur avec bind
            btn.addEventListener('click', this.handlePrintClick.bind(this));
        });
        
        // Écouter l'impression multiple
        const printSelectedBtn = document.getElementById('printSelectedBtn');
        if (printSelectedBtn) {
            printSelectedBtn.removeEventListener('click', this.handleMultiplePrint);
            printSelectedBtn.addEventListener('click', this.handleMultiplePrint.bind(this));
        }
    }
    
    handlePrintClick = (e) => {
        // 🔥 Empêcher le comportement par défaut et la propagation
        e.preventDefault();
        e.stopPropagation();
        
        const btn = e.currentTarget;
        let orderId = btn.dataset.orderId;
        let type = btn.dataset.printType;
        
        // Pour le bouton quick-print, type = customer par défaut
        if (btn.classList.contains('quick-print') && !type) {
            type = 'customer';
        }
        
        // Si l'ID est dans un parent (cas du dropdown avec <button>)
        if (!orderId) {
            const parent = btn.closest('[data-order-id]');
            if (parent) orderId = parent.dataset.orderId;
        }
        
        if (!orderId) {
            console.error('Order ID manquant');
            this.showToast('error', 'Impossible d\'identifier la commande');
            return;
        }
        
        this.printTicket(orderId, type);
    }
    
    handleMultiplePrint = async () => {
        const selectedIds = Array.from(document.querySelectorAll('.row-checkbox:checked'))
            .map(cb => cb.dataset.orderId)
            .filter(id => id); // Filtrer les IDs undefined
        
        if (selectedIds.length === 0) {
            this.showToast('warning', 'Veuillez sélectionner des commandes');
            return;
        }
        
        // Demander le type de ticket pour l'impression multiple
        const type = confirm('Imprimer tickets client (OK) ou cuisine (Annuler) ?') ? 'customer' : 'kitchen';
        
        await this.printMultipleTickets(selectedIds, type);
    }
    
    loadPreferences() {
        const saved = localStorage.getItem('print_preferences');
        return saved ? JSON.parse(saved) : {
            defaultPrinter: 'system',
            autoPrint: true,
            showPreview: false,
            kitchenIncludeDrinks: false
        };
    }
    
    savePreferences() {
        localStorage.setItem('print_preferences', JSON.stringify(this.preferences));
        
        fetch('/print/preferences', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ preferences: this.preferences })
        }).catch(console.error);
    }
    
    async printTicket(orderId, type, options = {}) {
        this.printQueue.push({ orderId, type, options });
        this.processQueue();
    }
    
    async processQueue() {
        if (this.isPrinting || this.printQueue.length === 0) return;
        
        this.isPrinting = true;
        const job = this.printQueue.shift();
        
        try {
            await this.executePrint(job.orderId, job.type, job.options);
        } catch (error) {
            console.error('Erreur d\'impression:', error);
            this.showFallbackPdf(job.orderId, job.type);
        }
        
        this.isPrinting = false;
        this.processQueue();
    }
    
    async executePrint(orderId, type, options) {
        const url = `/print/ticket/${orderId}/${type}`;
        const params = new URLSearchParams({
            include_drinks: options.include_drinks ?? this.preferences.kitchenIncludeDrinks,
            show_prices: options.show_prices ?? true,
            language: options.language ?? 'fr'
        });
        
        const fullUrl = `${url}?${params.toString()}`;
        
        // Tentative d'impression directe
        const printWindow = window.open(fullUrl, '_blank', 'width=400,height=600,menubar=yes,toolbar=yes');
        
        if (printWindow) {
            // 🔥 Attendre que le contenu soit chargé
            printWindow.onload = () => {
                setTimeout(() => {
                    try {
                        printWindow.print();
                        printWindow.onafterprint = () => {
                            printWindow.close();
                            this.showToast('success', `Ticket ${this.getTicketLabel(type)} prêt à être imprimé`);
                        };
                    } catch (e) {
                        printWindow.close();
                        throw e;
                    }
                }, 500);
            };
        } else {
            throw new Error('Popup bloqué');
        }
    }
    
    getTicketLabel(type) {
        const labels = {
            'customer': 'client',
            'kitchen': 'cuisine',
            'cash': 'caisse',
            'delivery': 'livraison'
        };
        return labels[type] || type;
    }
    
    showFallbackPdf(orderId, type) {
        let modal = document.getElementById('pdfFallbackModal');
        if (modal) {
            modal.remove();
        }
        
        const modalHtml = `
            <div class="modal fade" id="pdfFallbackModal" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-dark">
                            <h5 class="modal-title">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                Impression impossible
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center py-4">
                            <i class="fas fa-print fa-3x text-muted mb-3"></i>
                            <p>Impossible d'imprimer directement.</p>
                            <p class="text-muted">Veuillez télécharger le PDF et l'imprimer manuellement.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href="/print/ticket/${orderId}/${type}" class="btn btn-primary" target="_blank">
                                <i class="fas fa-file-pdf me-2"></i> Télécharger PDF
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHtml);
        modal = new bootstrap.Modal(document.getElementById('pdfFallbackModal'));
        modal.show();
        
        document.getElementById('pdfFallbackModal').addEventListener('hidden.bs.modal', () => {
            document.getElementById('pdfFallbackModal').remove();
        });
    }
    
    async printMultipleTickets(orderIds, type) {
        this.showLoading('Préparation des tickets...');
        
        try {
            const response = await fetch('/print/multiple', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ order_ids: orderIds, type: type })
            });
            
            const data = await response.json();
            
            if (data.success) {
                const blob = this.base64ToBlob(data.pdf, 'application/pdf');
                const url = URL.createObjectURL(blob);
                const printWindow = window.open(url, '_blank');
                
                if (printWindow) {
                    printWindow.onload = () => {
                        setTimeout(() => {
                            try {
                                printWindow.print();
                                printWindow.onafterprint = () => printWindow.close();
                            } catch (e) {
                                printWindow.close();
                            }
                        }, 500);
                    };
                }
                
                this.showToast('success', `${data.count} ticket(s) prêt(s) à imprimer`);
            } else {
                this.showToast('error', data.error || 'Erreur lors de l\'impression');
            }
        } catch (error) {
            console.error('Erreur:', error);
            this.showToast('error', 'Erreur de connexion au serveur');
        } finally {
            this.hideLoading();
        }
    }
    
    base64ToBlob(base64, mimeType) {
        try {
            const byteCharacters = atob(base64);
            const byteNumbers = new Array(byteCharacters.length);
            for (let i = 0; i < byteCharacters.length; i++) {
                byteNumbers[i] = byteCharacters.charCodeAt(i);
            }
            const byteArray = new Uint8Array(byteNumbers);
            return new Blob([byteArray], { type: mimeType });
        } catch (error) {
            console.error('Erreur conversion base64:', error);
            return new Blob([], { type: mimeType });
        }
    }
    
    showToast(type, message) {
        if (typeof window.showToast === 'function') {
            window.showToast(type, message);
        } else {
            const toast = document.createElement('div');
            const bgColor = type === 'success' ? 'bg-success' : (type === 'warning' ? 'bg-warning' : 'bg-danger');
            const icon = type === 'success' ? 'check-circle' : (type === 'warning' ? 'exclamation-triangle' : 'times-circle');
            toast.className = `position-fixed bottom-0 end-0 p-3 m-3 ${bgColor} text-white rounded shadow`;
            toast.style.zIndex = '9999';
            toast.innerHTML = `<i class="fas fa-${icon} me-2"></i>${message}`;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }
    }
    
    showLoading(message) {
        this.hideLoading();
        
        const loader = document.createElement('div');
        loader.id = 'printLoader';
        loader.innerHTML = `
            <div style="position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); z-index:10000; display:flex; align-items:center; justify-content:center;">
                <div class="bg-white p-4 rounded-4 text-center shadow-lg" style="min-width: 250px;">
                    <div class="spinner-border text-primary mb-3" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                    <p class="mb-0">${message}</p>
                </div>
            </div>
        `;
        document.body.appendChild(loader);
    }
    
    hideLoading() {
        const loader = document.getElementById('printLoader');
        if (loader) loader.remove();
    }
    
    refresh() {
        this.setupEventListeners();
    }
}

// Initialisation
document.addEventListener('DOMContentLoaded', () => {
    window.printManager = new PrintManager();
});

// Support pour Turbo (si tu l'utilises)
document.addEventListener('turbo:load', () => {
    if (window.printManager) {
        window.printManager.refresh();
    } else {
        window.printManager = new PrintManager();
    }
});