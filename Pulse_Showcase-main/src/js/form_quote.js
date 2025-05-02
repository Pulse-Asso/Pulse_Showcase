// JavaScript pour afficher/supprimer dynamiquement les sections
document.addEventListener('DOMContentLoaded', function () {
    // Masquer toutes les sections au départ
    const rendezVousSection = document.getElementById('rendez-vous-section');
    const questionSection = document.getElementById('question-section');

    // Masquer les sections initialement
    rendezVousSection.style.display = 'none';
    questionSection.style.display = 'none';
});

document.getElementById('choice').addEventListener('change', function () {
    const choice = this.value;

    // Récupération des sections
    const rendezVousSection = document.getElementById('rendez-vous-section');
    const questionSection = document.getElementById('question-section');

    // Réinitialisation : vide les contenus des sections et les cache
    rendezVousSection.innerHTML = '';
    questionSection.innerHTML = '';
    rendezVousSection.style.display = 'none';
    questionSection.style.display = 'none';

    // Ajout du contenu en fonction du choix
    if (choice === 'rendez-vous') {
        rendezVousSection.innerHTML = `
            <h5 class="text-primary mb-4">Informations pour le rendez-vous</h5>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="nom" name="nom" 
                    placeholder="Votre nom" required minlength="2" maxlength="50">
                <label for="nom">Nom</label>
            </div>
                                        
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="prénom" name="prénom" 
                    placeholder="Votre Prénom" required minlength="2" maxlength="50">
                <label for="sites">Prénom</label>
            </div>

            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="etablissement" name="etablissement" 
                    placeholder="Nom de l'établissement" required minlength="2" maxlength="255" 
                    title="Le nom de l'établissement doit comporter entre 2 et 255 caractères.">
                <label for="etablissement">Nom de l'établissement</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="sites" name="sites" 
                    placeholder="Nombre de sites (campus)" required
                    title="Veuillez saisir un nombre valide pour les sites.">
                <label for="sites">Nombre de sites (campus)</label>
            </div>
            <div class="form-floating mb-4">
                <input type="number" class="form-control" id="etudiants" name="etudiants" 
                    placeholder="Nombre d'étudiants" required min="1" max="1000000" 
                    title="Veuillez entrer un nombre d'étudiants.">
                <label for="etudiants">Nombre d'étudiants</label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email_contact" name="email_contact" 
                    placeholder="Adresse mail de contact" required maxlength="255" 
                    title="Veuillez entrer une adresse email valide.">
                <label for="email_contact">Adresse mail de contact</label>
            </div>
            <div class="form-floating mb-4">
                <input type="tel" class="form-control" id="telephone" name="telephone" 
                    placeholder="Numéro de téléphone (exemple : +33 6 12 34 56 78)" required pattern="^\+?[0-9]{1,3}[\s\-]?(\([0-9]{1,4}\)|[0-9]{1,4})[\s\-]?[0-9]{2,4}([\s\-]?[0-9]{2,4}){1,3}$" 
                    title="Veuillez entrer un numéro de téléphone valide (exemple : +33 6 12 34 56 78).">
                <label for="telephone">Numéro de téléphone</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="disponibilites" name="disponibilites" 
                    placeholder="Quelles sont vos disponibilités ?" required maxlength="500" 
                    title="Veuillez décrire vos disponibilités (maximum 500 caractères).">
                <label for="disponibilites">Quelles sont vos disponibilités ?</label>
            </div>
            <div class="form-check mb-4">
                <input type="checkbox" class="form-check-input" id="request_quote" name="request_quote" required>
                <label class="form-check-label" for="request_quote">Je souhaite un devis</label>
            </div>

            <!-- Bouton envoyer la demande -->
            <div class="text-center">
                <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Envoyer la demande</button>
            </div>
        `;
        rendezVousSection.style.display = 'block'; // Montre la section
    } else if (choice === 'question') {
        questionSection.innerHTML = `
            <h5 class="text-primary mb-4">Avez-vous des questions ?</h5>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="nom" name="nom" 
                    placeholder="Votre nom" required minlength="2" maxlength="255">
                <label for="nom">Nom</label>
            </div>
                                        
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="prénom" name="prénom" 
                    placeholder="Votre Prénom" required>
                <label for="sites">Prénom</label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email_contact" name="email_contact" 
                    placeholder="Adresse mail de contact" required maxlength="255" 
                    title="Veuillez entrer une adresse email valide.">
                <label for="email_contact">Adresse mail</label>
            </div>
            <div class="form-floating mb-4">
                <input type="tel" class="form-control" id="telephone" name="telephone" 
                    placeholder="Numéro de téléphone (exemple : +33 6 12 34 56 78)" required pattern="^\+?[0-9]{1,3}[\s\-]?(\([0-9]{1,4}\)|[0-9]{1,4})[\s\-]?[0-9]{2,4}([\s\-]?[0-9]{2,4}){1,3}$ 
                    title="Veuillez entrer un numéro de téléphone valide (exemple : +33 6 12 34 56 78).">
                <label for="telephone">Numéro de téléphone</label>
            </div>
            <div class="form-floating mb-4">
                <textarea class="form-control" id="message" name="message" 
                    placeholder="Laissez un message ici" required maxlength="500" 
                    title="Veuillez laisser un message ou une question (maximum 500 caractères)." style="height: 150px"></textarea>
                <label for="message">Messages / Questions</label>
            </div>

            <!-- Bouton envoyer la demande -->
            <div class="text-center">
                <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Envoyer la demande</button>
            </div>
        `;
                                    
                                    
        questionSection.style.display = 'block'; // Montre la section
    }
});