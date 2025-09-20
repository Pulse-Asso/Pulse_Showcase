<!DOCTYPE html>
<html lang="fr">

<!-- Head start -->
<?php include '../components/head.php'; ?>
<!-- Head End -->

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="loading"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include '../components/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero-section" style="background-image: url('img/office.jpg'); background-size: cover; background-position: center; position: relative;">
        <div class="hero-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.35);"></div>
        <div class="hero-content" style="position: relative; z-index: 2;">
            <div class="hero-text">
                <h1 class="hero-title" style="color: white;">Mentions <span class="highlight">légales</span></h1>
                <p class="hero-subtitle" style="color: white;">Informations légales de genpulse.fr</p>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Mentions Légales Content Start -->
    <section class="section" style="background: white;">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Informations légales</p>
                <h2>Mentions légales</h2>
            </div>

            <div class="card" style="padding: 2rem;">
                <p><strong>Conformément à la loi n° 2004-575 du 21 juin 2004</strong> pour la confiance dans l’économie numérique, les présentes mentions légales précisent l’identité des différents intervenants responsables de la réalisation et du suivi du site.</p>

                <h3 style="margin-top: 2rem;">1. Édition du site</h3>
                <p>Le site accessible à l’URL <strong>genpulse.fr</strong> est édité par :</p>
                <ul>
                    <li>Vianney Otton</li>
                    <li>Nathalie Saada</li>
                </ul>
                <p><em>Remarque :</em> Pour des raisons de confidentialité, les informations personnelles (adresse complète, date de naissance) ne sont pas affichées publiquement.</p>

                <h3 style="margin-top: 2rem;">2. Hébergement</h3>
                <p>Le site est hébergé par <strong>Hostinger</strong>.<br>Pour toute information relative à l’hébergement, veuillez consulter le site de Hostinger : <a href="https://Hostinger.fr" target="_blank" rel="noopener">Hostinger.fr</a>.</p>

                <h3 style="margin-top: 2rem;">3. Directeur de publication</h3>
                <p>Le Directeur de la publication du site est <strong>Vianney Otton</strong>.</p>

                <h3 style="margin-top: 2rem;">4. Coordonnées</h3>
                <p><strong>Contact téléphonique :</strong></p>
                <ul>
                    <li>Vianney Otton : +33 782582528</li>
                    <li>Nathalie Saada : +33 677535853</li>
                </ul>
                <p><strong>Adresse email :</strong><br>pulse.pro.event@gmail.com</p>
                <p><strong>Adresse postale pour le courrier :</strong><br>3 Résidence du Parc, 91300 Massy, France</p>

                <h3 style="margin-top: 2rem;">5. Clause de responsabilité</h3>
                <p>Les informations fournies sur ce site sont données à titre indicatif. L’éditeur s’efforce d’assurer l’exactitude et la mise à jour des informations diffusées, mais ne saurait être tenu responsable des erreurs, d’une absence de disponibilité du site ou des dommages directs ou indirects pouvant résulter de l’accès à ce site ou de son utilisation. Les utilisateurs restent responsables de l’utilisation des informations et vérifient leur pertinence auprès de sources complémentaires.</p>

                <h3 style="margin-top: 2rem;">6. Propriété intellectuelle</h3>
                <p>Tous les contenus présents sur le site (textes, images, logos, graphiques, etc.) sont la propriété exclusive de l’éditeur ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des contenus, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’éditeur.</p>

                <h3 style="margin-top: 2rem;">7. Politique de confidentialité</h3>
                <p>Le traitement des données personnelles des utilisateurs est décrit dans notre <strong>Politique de Confidentialité</strong>. Nous vous invitons à consulter ce document pour comprendre comment vos données sont collectées, utilisées et protégées.</p>

                <h3 style="margin-top: 2rem;">8. Liens d’affiliation</h3>
                <p>Certains liens présents sur le site peuvent être des liens d’affiliation. Ces liens permettent à l’éditeur de percevoir une commission sans coût additionnel pour l’utilisateur. Les modalités spécifiques des liens d’affiliation sont détaillées dans un document dédié et sont accessibles via un lien sur le site.</p>

                <h3 style="margin-top: 2rem;">9. Mise à jour des mentions légales</h3>
                <p>Les présentes mentions légales sont susceptibles d’évoluer en fonction des changements législatifs ou organisationnels. Il est conseillé de les consulter régulièrement pour prendre connaissance des éventuelles modifications.</p>
            </div>
        </div>
    </section>
    <!-- Mentions Légales Content End -->

    <!-- Footer Start -->
    <?php include '../components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/cursor.js"></script>
    
</body>

</html>