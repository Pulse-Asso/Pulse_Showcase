<?php
session_start();

// Generate CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="fr">

<?php include '../Components/head.php'; ?>

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="loading"></div>
    </div>
    <!-- Spinner End -->

<?php include '../Components/navbar.php'; ?>

    <!-- Contact/Devis Section Start -->
    <section class="section" id="contact" style="background: #fff; padding: 6rem 0;">
        <div class="container">
            <div class="section-title" style="text-align: center; margin-bottom: 2rem;">
                <p class="section-subtitle">Demande de devis</p>
                <h2>Formulez-nous votre demande</h2>
            </div>

            <?php if (!empty($_SESSION['status'])): ?>
                <div style="max-width: 900px; margin: 0 auto 1.5rem auto;">
                    <div class="alert <?php echo $_SESSION['status'] === 'success' ? 'alert-success' : 'alert-danger'; ?>" role="alert" style="padding: 1rem 1.25rem; border-radius: 12px; border: 1px solid rgba(0,0,0,0.08); <?php echo $_SESSION['status'] === 'success' ? 'background:#ecfdf5;color:#065f46;' : 'background:#fef2f2;color:#991b1b;'; ?>">
                        <?php echo htmlspecialchars($_SESSION['message'] ?? (($_SESSION['status'] === 'success') ? 'Votre demande a été envoyée avec succès.' : 'Une erreur est survenue.')); ?>
                    </div>
                </div>
                <?php unset($_SESSION['status'], $_SESSION['message']); ?>
            <?php endif; ?>

            <div style="max-width: 900px; margin: 0 auto;">
                <div class="card" style="background: #ffffff; border-radius: 20px; padding: 2rem; box-shadow: 0 10px 25px rgba(2,8,20,0.06); border: 1px solid rgba(2,8,20,0.06);">
                    
                    <!-- Début formulaire -->
                    <form id="contactForm" action="../Actions/contact.php" method="POST">
                        <div style="margin-bottom: 1.25rem;">
                            <label for="choice" style="display:block; font-weight:600; color:#1e293b; margin-bottom: .5rem;">Je souhaite :</label>
                            <select id="choice" name="choice" required style="width:100%; padding: .9rem 1rem; border:1px solid #e2e8f0; border-radius: 12px; background:#fff; color:#0f172a;">
                                <option value="">Sélectionner un choix *</option>
                                <option value="rendez-vous">Faire une demande de rendez-vous</option>
                                <option value="question">Poser une question</option>
                            </select>
                        </div>

                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                        <div style="position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;">
                            <label for="hp_field">Laissez ce champ vide</label>
                            <input type="text" id="hp_field" name="hp_field" tabindex="-1" autocomplete="off">
                        </div>

                        <div id="rendez-vous-section" style="display:none; margin-top: 1rem;">
                            <h3 style="margin-bottom: 1rem; color:#1e293b;">Informations pour le rendez-vous</h3>
                            <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div>
                                    <label for="rdv_nom" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Nom</label>
                                    <input type="text" id="rdv_nom" name="nom" minlength="2" maxlength="50" placeholder="Votre nom" style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                                <div>
                                    <label for="rdv_prenom" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Prénom</label>
                                    <input type="text" id="rdv_prenom" name="prenom" minlength="2" maxlength="50" placeholder="Votre prénom" style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                            </div>

                            <div style="margin-top:1rem;">
                                <label for="etablissement" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Nom de l'établissement</label>
                                <input type="text" id="etablissement" name="etablissement" minlength="2" maxlength="255" placeholder="Nom de l'établissement" title="Le nom de l'établissement doit comporter entre 2 et 255 caractères." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                            </div>

                            <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top:1rem;">
                                <div>
                                    <label for="sites" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Nombre de sites (campus)</label>
                                    <input type="number" id="sites" name="sites" min="1" max="1000" placeholder="Nombre de sites" title="Veuillez saisir un nombre valide pour les sites." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                                <div>
                                    <label for="etudiants" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Nombre d'étudiants</label>
                                    <input type="number" id="etudiants" name="etudiants" min="1" max="1000000" placeholder="Nombre d'étudiants" title="Veuillez entrer un nombre d'étudiants." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                            </div>

                            <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top:1rem;">
                                <div>
                                    <label for="rdv_email" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Adresse mail de contact</label>
                                    <input type="email" id="rdv_email" name="email_contact" maxlength="255" placeholder="email@exemple.com" title="Veuillez entrer une adresse email valide." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                                <div>
                                    <label for="rdv_telephone" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Numéro de téléphone</label>
                                    <input type="tel" id="rdv_telephone" name="telephone" placeholder="Numéro de téléphone" pattern="^(?:\+?\d{1,3}[ \-]?)?(?:\(?\d{1,4}\)?[ \-]?)?\d{6,14}$" title="Veuillez entrer un numéro de téléphone valide." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                            </div>

                            <div style="margin-top:1rem;">
                                <label for="disponibilites" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Quelles sont vos disponibilités ?</label>
                                <input type="text" id="disponibilites" name="disponibilites" maxlength="500" placeholder="Décrivez vos disponibilités" title="Veuillez décrire vos disponibilités (maximum 500 caractères)." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                            </div>

                            <div style="display:flex; align-items:center; gap:.5rem; margin-top:1rem;">
                                <input type="checkbox" id="request_quote" name="request_quote" style="width:1.1rem; height:1.1rem;">
                                <label for="request_quote" style="color:#1e293b;">Je souhaite un devis</label>
                            </div>

                            <div style="text-align:center; margin-top:1.5rem;">
                                <button type="submit" class="btn btn-primary-gradient" style="padding: .9rem 2rem; border-radius: 999px; font-weight:700;">Envoyer la demande</button>
                            </div>
                        </div>

                        <div id="question-section" style="display:none; margin-top: 1rem;">
                            <h3 style="margin-bottom: 1rem; color:#1e293b;">Avez-vous des questions ?</h3>
                            <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div>
                                    <label for="q_nom" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Nom</label>
                                    <input type="text" id="q_nom" name="q_nom" minlength="2" maxlength="50" placeholder="Votre nom" style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                                <div>
                                    <label for="q_prenom" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Prénom</label>
                                    <input type="text" id="q_prenom" name="q_prenom" minlength="2" maxlength="50" placeholder="Votre prénom" style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                            </div>

                            <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top:1rem;">
                                <div>
                                    <label for="q_email" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Adresse mail</label>
                                    <input type="email" id="q_email" name="q_email" maxlength="255" placeholder="email@exemple.com" title="Veuillez entrer une adresse email valide." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                                <div>
                                    <label for="q_telephone" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Numéro de téléphone</label>
                                    <input type="tel" id="q_telephone" name="q_telephone" placeholder="Numéro de téléphone" pattern="^(?:\+?\d{1,3}[ \-]?)?(?:\(?\d{1,4}\)?[ \-]?)?\d{6,14}$" title="Veuillez entrer un numéro de téléphone valide." style="width:100%; padding:.9rem 1rem; border:1px solid #e2e8f0; border-radius:12px;">
                                </div>
                            </div>

                            <div style="margin-top:1rem;">
                                <label for="message" style="display:block; font-weight:600; color:#1e293b; margin-bottom:.5rem;">Messages / Questions</label>
                                <textarea id="message" name="message" maxlength="500" placeholder="Laissez un message ici" title="Veuillez laisser un message ou une question (maximum 500 caractères)." style="width:100%; padding:1rem; border:1px solid #e2e8f0; border-radius:12px; min-height:150px; resize:vertical;"></textarea>
                            </div>

                            <div style="text-align:center; margin-top:1.5rem;">
                                <button type="submit" class="btn btn-primary-gradient" style="padding: .9rem 2rem; border-radius: 999px; font-weight:700;">Envoyer la demande</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact/Devis Section End -->

    <!-- Footer -->
    <?php include '../Components/footer.php'; ?>

    <!-- Back to Top -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/cursor.js"></script>
    <script src="../js/form-toggle.js"></script>
</body>

</html>