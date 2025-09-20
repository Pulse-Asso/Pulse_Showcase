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

    <!-- Navbar Start -->
    <?php include '../components/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- 404 Hero Start -->
    <section class="modern-hero-section min-vh-50" style="padding-top: 8rem; padding-bottom: 6rem;">
        <div class="hero-background">
            <div class="hero-pattern"></div>
        </div>
        <div class="container">
            <div class="text-center">
                <div class="hero-badge"><i class="fas fa-triangle-exclamation"></i> Erreur 404</div>
                <h1 class="hero-title">Oups, cette page est introuvable</h1>
                <p class="hero-subtitle">La page que vous cherchez a peut-être été déplacée, renommée ou n'existe plus.</p>
                <div class="hero-buttons" style="justify-content: center;">
                    <a href="index.html" class="btn btn-primary-modern"><i class="fas fa-home"></i> Retour à l'accueil</a>
                    <a href="fonctionnalites-enseignement.html" class="btn btn-secondary-modern"><i class="fas fa-compass"></i> Découvrir Pulse</a>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Hero End -->

    <!-- Suggestions Start -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Peut-être cherchiez-vous…</p>
                <h2>Accéder rapidement aux pages utiles</h2>
            </div>
            <div class="features-grid">
                <a class="feature-card" href="fonctionnalites-commune.html">
                    <div class="feature-icon"><i class="fas fa-city"></i></div>
                    <h3>Fonctionnalités Commune</h3>
                    <p>Découvrez comment dynamiser la vie citoyenne.</p>
                </a>
                <a class="feature-card" href="fonctionnalites-enseignement.html">
                    <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>Fonctionnalités Enseignement</h3>
                    <p>Centralisez la vie du campus et engagez vos étudiants.</p>
                </a>
                <a class="feature-card" href="fonctionnalites-association.html">
                    <div class="feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <h3>Fonctionnalités Association</h3>
                    <p>Des outils pensés pour vos événements et votre communauté.</p>
                </a>
            </div>
        </div>
    </section>
    <!-- Suggestions End -->

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

    <!-- <script>
        // Optionnel: masquer le spinner rapidement pour la page 404
        window.addEventListener('load', function () {
            var spinner = document.getElementById('spinner');
            if (spinner) spinner.classList.remove('show');
        });
    </script> -->
</body>

</html>
