<?php
session_start();

// Generate CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="fr">

<?php include '../components/head.php'; ?>

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="loading"></div>
    </div>
    <!-- Spinner End -->

<?php include '../components/navbar.php'; ?>

    <!-- Contact/Devis Section Start -->
    <form id="contactForm" action="../action/contact.php" method="POST" novalidate>
        <div class="container-xxl" id="contact">
            <div class="container px-lg-5">
                <div class="text-center" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium mb-3">Demande de devis</h5>
                    <h1 class="mb-5">Formulez-nous votre demande</h1>
                </div>

                <!-- Alert messages from server -->
                <?php if (!empty($_SESSION['status'])): ?>
                    <div class="row justify-content-center mb-4">
                        <div class="col-lg-9">
                            <div class="alert <?php echo $_SESSION['status'] === 'success' ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                                <?php echo htmlspecialchars($_SESSION['message'] ?? (($_SESSION['status'] === 'success') ? 'Votre demande a été envoyée avec succès.' : 'Une erreur est survenue.')); ?>
                            </div>
                        </div>
                    </div>
                    <?php unset($_SESSION['status'], $_SESSION['message']); ?>
                <?php endif; ?>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div data-wow-delay="0.3s">
                            <div class="mb-4">
                                <label for="choice" class="form-label">Je souhaite :</label>
                                <select class="form-select" id="choice" name="choice" required>
                                    <option value="">Sélectionner un choix *</option>
                                    <option value="rendez-vous">Faire une demande de rendez-vous</option>
                                    <option value="question">Poser une question</option>
                                </select>
                            </div>

                            <!-- CSRF Token -->
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                            <!-- Honeypot -->
                            <div style="position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;">
                                <label for="hp_field">Laissez ce champ vide</label>
                                <input type="text" id="hp_field" name="hp_field" tabindex="-1" autocomplete="off">
                            </div>

                            <!-- Section Rendez-vous -->
                            <div id="rendez-vous-section" class="mb-5" style="display:none;">
                                <h5 class="text-primary mb-4">Informations pour le rendez-vous</h5>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="rdv_nom" name="nom" placeholder="Votre nom" minlength="2" maxlength="50">
                                    <label for="rdv_nom">Nom</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="rdv_prenom" name="prenom" placeholder="Votre prénom" minlength="2" maxlength="50">
                                    <label for="rdv_prenom">Prénom</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="etablissement" name="etablissement" placeholder="Nom de l'établissement" minlength="2" maxlength="255" title="Le nom de l'établissement doit comporter entre 2 et 255 caractères.">
                                    <label for="etablissement">Nom de l'établissement</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="number" class="form-control" id="sites" name="sites" placeholder="Nombre de sites (campus)" min="1" max="1000" title="Veuillez saisir un nombre valide pour les sites.">
                                    <label for="sites">Nombre de sites (campus)</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="number" class="form-control" id="etudiants" name="etudiants" placeholder="Nombre d'étudiants" min="1" max="1000000" title="Veuillez entrer un nombre d'étudiants.">
                                    <label for="etudiants">Nombre d'étudiants</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="rdv_email" name="email_contact" placeholder="Adresse mail de contact" maxlength="255" title="Veuillez entrer une adresse email valide.">
                                    <label for="rdv_email">Adresse mail de contact</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="tel" class="form-control" id="rdv_telephone" name="telephone" placeholder="Numéro de téléphone" pattern="^(?:\+?\d{1,3}[ \-]?)?(?:\(?\d{1,4}\)?[ \-]?)?\d{6,14}$" title="Veuillez entrer un numéro de téléphone valide.">
                                    <label for="rdv_telephone">Numéro de téléphone</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="disponibilites" name="disponibilites" placeholder="Quelles sont vos disponibilités ?" maxlength="500" title="Veuillez décrire vos disponibilités (maximum 500 caractères).">
                                    <label for="disponibilites">Quelles sont vos disponibilités ?</label>
                                </div>
                                <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" id="request_quote" name="request_quote">
                                    <label class="form-check-label" for="request_quote">Je souhaite un devis</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Envoyer la demande</button>
                                </div>
                            </div>

                            <!-- Section Questions -->
                            <div id="question-section" class="mb-5" style="display:none;">
                                <h5 class="text-primary mb-4">Avez-vous des questions ?</h5>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="q_nom" name="q_nom" placeholder="Votre nom" minlength="2" maxlength="50">
                                    <label for="q_nom">Nom</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="q_prenom" name="q_prenom" placeholder="Votre prénom" minlength="2" maxlength="50">
                                    <label for="q_prenom">Prénom</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="q_email" name="q_email" placeholder="Adresse mail" maxlength="255" title="Veuillez entrer une adresse email valide.">
                                    <label for="q_email">Adresse mail</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="tel" class="form-control" id="q_telephone" name="q_telephone" placeholder="Numéro de téléphone" pattern="^(?:\+?\d{1,3}[ \-]?)?(?:\(?\d{1,4}\)?[ \-]?)?\d{6,14}$" title="Veuillez entrer un numéro de téléphone valide.">
                                    <label for="q_telephone">Numéro de téléphone</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <textarea class="form-control" id="message" name="message" placeholder="Laissez un message ici" maxlength="500" title="Veuillez laisser un message ou une question (maximum 500 caractères)." style="height: 150px"></textarea>
                                    <label for="message">Messages / Questions</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Envoyer la demande</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Contact/Devis Section End -->

    <!-- Footer -->
    <?php include '../components/footer.php'; ?>

    <!-- Back to Top -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script>
    (function() {
        const choiceEl = document.getElementById('choice');
        const rdvSection = document.getElementById('rendez-vous-section');
        const qSection = document.getElementById('question-section');

        const rdvRequiredIds = ['rdv_nom','rdv_prenom','etablissement','sites','etudiants','rdv_email','rdv_telephone','disponibilites'];
        const qRequiredIds = ['q_nom','q_prenom','q_email','q_telephone','message'];

        function setRequired(ids, required) {
            ids.forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    if (required) {
                        el.setAttribute('required','required');
                    } else {
                        el.removeAttribute('required');
                    }
                }
            });
        }

        function toggleSections() {
            const val = choiceEl.value;
            if (val === 'rendez-vous') {
                rdvSection.style.display = '';
                qSection.style.display = 'none';
                setRequired(rdvRequiredIds, true);
                setRequired(qRequiredIds, false);
            } else if (val === 'question') {
                rdvSection.style.display = 'none';
                qSection.style.display = '';
                setRequired(rdvRequiredIds, false);
                setRequired(qRequiredIds, true);
            } else {
                rdvSection.style.display = 'none';
                qSection.style.display = 'none';
                setRequired(rdvRequiredIds, false);
                setRequired(qRequiredIds, false);
            }
        }

        choiceEl.addEventListener('change', toggleSections);
        toggleSections();
    })();
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/cursor.js"></script>
    
</body>

</html>

