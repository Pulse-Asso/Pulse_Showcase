// form-toggle.js
function initFormToggle() {
    const choiceEl = document.getElementById('choice');
    const rdvSection = document.getElementById('rendez-vous-section');
    const qSection = document.getElementById('question-section');

    const rdvRequiredIds = [
        'rdv_nom','rdv_prenom','etablissement',
        'sites','etudiants','rdv_email','rdv_telephone','disponibilites'
    ];
    const qRequiredIds = [
        'q_nom','q_prenom','q_email','q_telephone','message'
    ];

    function setRequired(ids, required) {
        ids.forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                required ? el.setAttribute('required', 'required') : el.removeAttribute('required');
            }
        });
    }

    function toggleSections() {
        const val = choiceEl.value;
        if (val === 'rendez-vous') {
            rdvSection.style.display = 'block';
            qSection.style.display = 'none';
            setRequired(rdvRequiredIds, true);
            setRequired(qRequiredIds, false);
        } else if (val === 'question') {
            rdvSection.style.display = 'none';
            qSection.style.display = 'block';
            setRequired(rdvRequiredIds, false);
            setRequired(qRequiredIds, true);
        } else {
            rdvSection.style.display = 'none';
            qSection.style.display = 'none';
            setRequired(rdvRequiredIds, false);
            setRequired(qRequiredIds, false);
        }
    }

    if (choiceEl) {
        choiceEl.addEventListener('change', toggleSections);
        toggleSections(); // état initial
    }
}

// Lancer automatiquement au chargement du DOM
document.addEventListener('DOMContentLoaded', initFormToggle);
