<!DOCTYPE html>
<html lang="fr">

<!-- Head start -->
<?php include '../Components/head.php'; ?>
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
    <?php include '../Components/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero-section" id="hero" style="background-image: url('../img/office1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.4); position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1;"></div>
        <div class="hero-content" style="position: relative; z-index: 2;">
            <div class="hero-text">
                <h1 class="hero-title" style="color: white;">Notre <span class="highlight">équipe</span></h1>
                <p class="hero-subtitle" style="color: white;">Les passionnés derrière Pulse, dédiés à révolutionner l'expérience étudiante</p>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Team Section Start -->
    <section class="team-section" id="team">
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-5">
                    <h2 class="section-title">Rencontrez notre équipe</h2>
                    <p class="section-subtitle">Trois profils complémentaires, une vision commune</p>
                </div>
                
                <div class="row justify-content-center" style="margin-top: 3rem; gap: 2rem;">
                    <!-- Vianney Otton -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="../img/vi.png" alt="Vianney Otton" class="img-fluid">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-name">Vianney Otton</h4>
                                <p class="team-role">Co-fondateur</p>
                                <p class="team-school">EM Lyon & EPF</p>
                                <p class="team-description">Possède une double formation Ingénieur-Commerce et plusieurs expériences en création d'entreprises dans la tech </p>
                            </div>
                        </div>
                    </div>

                    <!-- Nathalie Saada -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="../img/na.png" alt="Nathalie Saada" class="img-fluid">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-name">Nathalie Saada</h4>
                                <p class="team-role">Présidente</p>
                                <p class="team-school">EPF</p>
                                <p class="team-description">Ingénieure de formation et engagée activement dans plus de 6 associations</p>
                            </div>
                        </div>
                    </div>

                    <!-- Damien Drozd -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="../img/da.png" alt="Damien Drozd" class="img-fluid">
                                <div class="team-overlay">
                                    <div class="team-social">
                                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="team-name">Damien Drozd</h4>
                                <p class="team-role">Co-fondateur</p>
                                <p class="team-school">Ynov</p>
                                <p class="team-description">Développeur avec plus de 3ans d'expériences en développement d'applications mobiles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Footer Start -->
    <?php include '../Components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/cursor.js"></script>

</body>

</html>