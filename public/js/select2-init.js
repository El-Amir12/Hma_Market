// public/js/select2-init.js

/**
 * Initialise Select2 sur un élément ou un conteneur donné.
 * @param {HTMLElement|jQuery} container - Le conteneur dans lequel chercher les éléments.
 */
function initSelect2(container) {
    if (typeof $ === 'undefined' || !$.fn.select2) {
        console.warn('jQuery ou Select2 non chargé, tentative dans 200ms...');
        setTimeout(() => initSelect2(container), 200);
        return;
    }
    
    // Initialisation des selects de catégorie (classe .select2-category)
    $(container).find('.select2-category').select2({
        theme: "bootstrap-5",
        language: "fr",
        width: "100%",
        placeholder: "Sélectionnez une catégorie...",
        allowClear: true
    });
    
    // Initialisation des selects de produit (classe .product-select)
    $(container).find('.product-select').select2({
        theme: "bootstrap-5",
        language: "fr",
        width: "100%",
        placeholder: "Choisir un produit",
        allowClear: true
    });
    
    // Initialisation des selects d'unité (classe .unit-select)
    $(container).find('.unit-select').select2({
        theme: "bootstrap-5",
        language: "fr",
        width: "100%",
        minimumResultsForSearch: Infinity
    });
    
    // Ajoutez d'autres initialisations si nécessaire (par exemple pour d'autres selects)
}

// Attendre que le DOM soit prêt
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser Select2 sur tout le document au chargement
    initSelect2(document);
    
    // Écouter les ajouts dynamiques (pour les collections)
    // Exemple : si vous ajoutez un nouvel ingrédient, déclenchez un événement personnalisé
    // Pour l'instant, nous allons utiliser un MutationObserver pour détecter les nouveaux éléments
    // mais l'idéal est de déclencher manuellement l'initialisation après chaque ajout.
    
    // Solution simple : après chaque ajout d'un nouvel élément, appelez initSelect2 sur ce nouvel élément.
    // Pour cela, nous allons exposer une fonction globale.
    window.initSelect2 = initSelect2;
    
    // Alternative : utiliser un événement personnalisé que vous déclenchez après chaque ajout
    // Par exemple, après avoir ajouté un ingrédient, vous faites :
    // const newItem = ...; // l'élément ajouté
    // initSelect2(newItem);
});