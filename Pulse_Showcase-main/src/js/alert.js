// alert.js

// Fonction pour fermer l'alerte manuellement
function closeAlert(id) {
    const alertElement = document.getElementById(id);
    if (alertElement) {
        alertElement.remove();
    }
}


// Disparition automatique des alertes après 5 secondes
setTimeout(function() {
    ['alert-success', 'alert-fail'].forEach(function(id) {
        const alertElement = document.getElementById(id);
        if (alertElement) {
            alertElement.style.animation = 'slideOutRight 0.5s ease-in-out forwards';
            // Retire l'élément après la fin de l'animation
            setTimeout(() => {
                alertElement.remove();
            }, 500);
        }
    });
}, 4500); // Lance l'animation de sortie à 4.5s pour que l'alerte disparaisse à 5s