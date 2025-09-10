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


    <!-- Hero Section Start -->
    <section class="hero-section" id="hero">
        <div class="hero-content">
            <!-- Text Content -->
            <div class="hero-text">
                <h1 class="hero-title">Booster la vie locale avec <span class="highlight">GENPULSE</span></h1>
                <p class="hero-subtitle">Un outil unique qui rassemble la vie associative, étudiante et citoyenne en un seul endroit</p>
                <div class="hero-buttons">
                    <a href="#features" class="btn btn-primary btn-lg">
                        <i class="fas fa-rocket"></i>
                        En savoir plus
                    </a>
                    <a href="#contact" class="btn btn-secondary btn-lg">
                        <i class="fas fa-play"></i>
                        Demander une démo
                    </a>
                </div>
            </div>
            
           
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- section raison d etre de genpulse -->
    <section class="app-showcase-section" id="app-showcase">
        <div class="app-showcase-container">
            <!-- Phone Side -->
            <div class="app-phone-side">
                <div class="phone-container" style="background-color: #FFE3B2; padding: 20px; border-radius: 20px; position: relative; width: 380px; height: 420px;">
                    <!-- Phone Image -->
                    <img src="../img/home_e.png" alt="GENPULSE App Interface" class="phone-image" style="width: 300px; height: auto; position: relative; z-index: 2;">
                    
                                         <!-- Floating Like Icons -->
                     <div class="floating-likes" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; pointer-events: none; z-index: 30;">
                         <img src="../img/like.png" alt="Like" style="position: absolute; top: 10px; left: 5px; width: 60px; height: 60px; animation: float 3s ease-in-out infinite;">
                         <img src="../img/like.png" alt="Like" style="position: absolute; top: 80px; right: 15px; width: 50px; height: 50px; animation: float 3s ease-in-out infinite 0.5s;">
                         <img src="../img/like.png" alt="Like" style="position: absolute; bottom: 100px; left: 5px; width: 70px; height: 70px; animation: float 3s ease-in-out infinite 1s;">
                         <img src="../img/like.png" alt="Like" style="position: absolute; bottom: 20px; right: 20px; width: 56px; height: 56px; animation: float 3s ease-in-out infinite 1.5s;">
                     </div>
                     
                     <!-- Floating Notification Icons -->
                     <div class="floating-notifications" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; pointer-events: none; z-index: 30;">
                         <img src="../img/notif.png" alt="Notification" style="position: absolute; top: 50px; left: -60px; width: 64px; height: 64px; animation: float 3s ease-in-out infinite 0.3s;">
                         <img src="../img/notif.png" alt="Notification" style="position: absolute; top: 150px; right: -60px; width: 54px; height: 54px; animation: float 3s ease-in-out infinite 0.8s;">
                         <img src="../img/notif.png" alt="Notification" style="position: absolute; bottom: 50px; left: -40px; width: 66px; height: 66px; animation: float 3s ease-in-out infinite 1.2s;">
                         <img src="../img/notif.png" alt="Notification" style="position: absolute; bottom: 80px; right: -40px; width: 58px; height: 58px; animation: float 3s ease-in-out infinite 1.7s;">
                     </div>
                </div>
            </div>
            
            <!-- Content Side -->
            <div class="app-content">
                <h2>La <strong>raison d'être de GENPULSE</strong></h2>
                <p>Pallier les problèmes de communication rencontrés actuellement grâce à notre solution :</p>
                <ul class="benefits-list">
                    <li>Rassembler la communication massive éparpillée sur les réseaux sociaux, mails et autres canaux en un seul point d’accès clair</li>
                    <li>Réduire la surcharge informationnelle en rendant l'information accessible et visible rapidement</li>
                    <li>Cibler les informations en choisissant à qui vous voulez les partager</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- section raison d etre de genpulse End -->

    <!-- section notre solution Start -->
    <section class="section solution-section" id="about">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Notre solution</p>
                <h2>1er canal de communication où tous les acteurs sont interconnectés</h2>
                <p>Nous rejoindre c'est intégrer un réseau </p>
            </div>
            
            <!-- Canal Privé - Design exact selon l'image -->
            <div class="solution-feature-card canal-prive">
                <div class="feature-content">
                    <h3>Un canal privé</h3>
                    <p>Un espace dédié aux universités, pour centraliser la vie du campus (associations étudiantes, Crous, administration)</p>
                    <ul class="feature-benefits">
                        <li><i class="fas fa-check"></i> Accès sécurisé</li>
                        <li><i class="fas fa-check"></i> Communication interne</li>
                        <li><i class="fas fa-check"></i> Gestion centralisée</li>
                    </ul>
                </div>
                
                <div class="feature-image">
                    <img src="../img/prive.png" alt="Canal privé universitaire">
                    <div class="feature-overlay">
                        <i class="fas fa-lock"></i>
                    </div>
                    <!-- Bulles flottantes pour le canal privé -->
                    <div class="floating-bubbles">
                        <div class="bubble bubble-events">
                            <i class="fas fa-calendar-alt"></i>
                            <span>événements</span>
                        </div>
                        <div class="bubble bubble-communication">
                            <i class="fas fa-comments"></i>
                            <span>Communication</span>
                        </div>
                        <div class="bubble bubble-secure">
                            <i class="fas fa-shield-alt"></i>
                            <span>Sécurisé</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Canal Public -->
            <div class="solution-feature-card canal-public">
                <div class="feature-image">
                    <img src="../img/public.png" alt="Canal public communautaire">
                    <div class="feature-overlay">
                        <i class="fas fa-unlock"></i>
                    </div>
                    <!-- Bulles flottantes pour le canal public -->
                    <div class="floating-bubbles">
                        <div class="bubble bubble-events">
                            <i class="fas fa-calendar-alt"></i>
                            <span>événements</span>
                        </div>
                        <div class="bubble bubble-communication">
                            <i class="fas fa-comments"></i>
                            <span>Communication</span>
                        </div>
                        <div class="bubble bubble-public">
                            <i class="fas fa-users"></i>
                            <span>Public</span>
                        </div>
                    </div>
                </div>
                <div class="feature-content">
                    <h3>Un canal public</h3>
                    <p>Un espace commun pour les mairies, associations et partenaires locaux, afin de donner de la visibilité aux événements et renforcer le lien social</p>
                    <ul class="feature-benefits">
                        <li><i class="fas fa-check"></i> Visibilité maximale</li>
                        <li><i class="fas fa-check"></i> Collaboration locale</li>
                        <li><i class="fas fa-check"></i> Engagement citoyen</li>
                    </ul>
                </div>
            </div>
            

        </div>
    </section>
    <!-- section notre solution End -->

    <!-- section fonctionnalités personnalisées Start -->
    <section class="section section-alt" id="profile-features">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Fonctionnalités personnalisées</p>
                <h2>Découvrez les fonctionnalités selon votre profil</h2>
                <p>Choisissez votre profil pour découvrir les fonctionnalités adaptées à vos besoins</p>
            </div>
            
            <div class="profile-features-grid">
                <a href="fonctionnalites-enseignement.html" class="profile-feature-card">
                    <div class="profile-feature-image">
                        <img src="../img/ecole.jpg" alt="Enseignement supérieur">
                    </div>
                    <div class="profile-feature-content">
                        <h3>Enseignement supérieur</h3>
                        <p>Fonctionnalités dédiées aux universités, écoles et établissements d'enseignement supérieur</p>
                    </div>
                    <div class="btn btn-primary profile-btn">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
                
                <a href="fonctionnalites-commune.html" class="profile-feature-card">
                    <div class="profile-feature-image">
                        <img src="../img/commune.jpg" alt="Communes & Mairies">
                    </div>
                    <div class="profile-feature-content">
                        <h3>Communes & Mairies</h3>
                        <p>Solutions adaptées aux mairies et collectivités locales pour dynamiser la vie citoyenne</p>
                    </div>
                    <div class="btn btn-primary profile-btn">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
                
                <a href="fonctionnalites-association.html" class="profile-feature-card">
                    <div class="profile-feature-image">
                        <img src="../img/asso.jpg" alt="Associations">
                    </div>
                    <div class="profile-feature-content">
                        <h3>Associations</h3>
                        <p>Outils spécialement conçus pour les associations et organisations à but non lucratif</p>
                    </div>
                    <div class="btn btn-primary profile-btn">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- section fonctionnalités personnalisées End -->



    <!-- section stats Start -->
    <section class="section stats-section modern-stats-section">
        <div class="stats-background">
            <div class="floating-particles"></div>
            <div class="gradient-overlay"></div>
        </div>
        
        <div class="container">
            <div class="section-title animated-title">
                <h2 class="glow-text">Adopté par des milliers d'utilisateurs dans 4 régions</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="stats-grid modern-stats-grid">
                <div class="stat-item modern-stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="90">0</h3>
                        <span class="stat-symbol">%</span>
                        <p>De visibilité</p>
                    </div>
                    <div class="stat-glow"></div>
                </div>
                
                <div class="stat-item modern-stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="1000">0</h3>
                        <span class="stat-symbol">+</span>
                        <p>Étudiants actifs</p>
                    </div>
                    <div class="stat-glow"></div>
                </div>
                
                <div class="stat-item modern-stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="150">0</h3>
                        <span class="stat-symbol">+</span>
                        <p>Événements créés</p>
                    </div>
                    <div class="stat-glow"></div>
                </div>
                
                <div class="stat-item modern-stat-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="counter" data-target="100">0</h3>
                        <span class="stat-symbol">%</span>
                        <p>Satisfaction utilisateurs</p>
                    </div>
                    <div class="stat-glow"></div>
                </div>
            </div>
            
            <div class="stats-decoration">
                <div class="floating-element element-1"></div>
                <div class="floating-element element-2"></div>
                <div class="floating-element element-3"></div>
                <div class="floating-element element-4"></div>
            </div>
        </div>
    </section>
    <!-- section stats End -->

    <!-- Section Partenariats Start -->
    <section class="section" id="partenariats">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Partenariats</p>
                <h2>Nous font confiance</h2>
            </div>
            
            <div class="partners-slider">
                <div class="partners-track">
                    <div class="partners-container">
                        <img src="../img/bde.jpg" alt="BDE" class="partner-logo">
                        <img src="../img/uva.png" alt="UVA" class="partner-logo">
                        <img src="../img/bds.jpg" alt="BDS" class="partner-logo">
                        <img src="../img/epf.png" alt="EPF" class="partner-logo">
                        <img src="../img/bde_ice.jpg" alt="BDE ICE" class="partner-logo">
                        <img src="../img/je.jpg" alt="JE" class="partner-logo">
                    </div>
                    <div class="partners-container">
                        <img src="../img/bde.jpg" alt="BDE" class="partner-logo">
                        <img src="../img/uva.png" alt="UVA" class="partner-logo">
                        <img src="../img/bds.jpg" alt="BDS" class="partner-logo">
                        <img src="../img/epf.png" alt="EPF" class="partner-logo">
                        <img src="../img/bde_ice.jpg" alt="BDE ICE" class="partner-logo">
                        <img src="../img/je.jpg" alt="JE" class="partner-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Partenariats End -->

    <!-- section témoignages Start -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-title">
                <p class="section-subtitle">Témoignages</p>
                <h2>Ce que disent nos utilisateurs</h2>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Pulse a révolutionné la communication sur notre campus. Les étudiants sont plus engagés que jamais !"
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">M</div>
                        <div class="testimonial-info">
                            <h4>Marie Dubois</h4>
                            <p>Directrice des affaires étudiantes, EPF</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Enfin une application qui centralise tout ! Plus besoin de naviguer entre plusieurs réseaux sociaux."
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">T</div>
                        <div class="testimonial-info">
                            <h4>Thomas Martin</h4>
                            <p>Président BDE, EM Lyon</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "L'interface est intuitive et les fonctionnalités répondent parfaitement à nos besoins."
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">S</div>
                        <div class="testimonial-info">
                            <h4>Sophie Bernard</h4>
                            <p>Étudiante, 3ème année</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section témoignages End -->

    <!-- section cta Start -->
    <section class="section cta-section">
        <div class="container">
            <div class="solution-cta">
                <div class="cta-content">
                    <h3>Prêt à rejoindre le réseau ?</h3>
                    <p>Découvrez comment GENPULSE peut transformer votre expérience</p>
                    <a href="#contact" class="btn btn-primary btn-lg">Commencer maintenant</a>
                </div>
                <div class="cta-image">
                    <img src="../img/im3.jpg" alt="Équipe GENPULSE">
                </div>
            </div>
        </div>
    </section>
    <!-- section cta End -->

    <!-- section contact Start -->
    <?php include '../components/contact.php'; ?>
    <!-- section contact End -->

    <!-- section footer Start -->
    <?php include '../components/footer.php'; ?>
    <!-- section footer End -->

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