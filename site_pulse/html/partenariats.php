<!DOCTYPE html>
<html lang="fr">

<?php include '../components/head.php'; ?>


<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    <!-- End Custom Cursor -->

    <?php include '../components/navbar.php'; ?>

    <!-- Hero Section Start -->
    <section class="hero-section partenariats-page" style="background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%); min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden;">
        <!-- Bulles flottantes avec mots-clés -->
        <div class="floating-bubbles">
            <div class="floating-bubble">🤝 Partenariat</div>
            <div class="floating-bubble">🎯 Bons plans</div>
            <div class="floating-bubble">👥 Communauté</div>
            <div class="floating-bubble">💡 Gratuit</div>
        </div>
        
        <div class="hero-content" style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; text-align: center; color: white;">
            <div class="hero-text">
                <h1 class="hero-title" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; margin-bottom: 1.5rem; line-height: 1.1;">
                    Rejoignez notre <span style="color: #ffd23f;">réseau de partenaires</span>
                </h1>
                <p class="hero-subtitle" style="font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 3rem; opacity: 0.9;">
                    Boostez votre visibilité auprès de <strong>+70 associations</strong> et de milliers d'étudiants dans <strong>4 régions</strong>
                </p>
                <div class="hero-buttons" style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <a href="#types-partenariats" class="btn btn-primary btn-lg" style="background: white; color: #ff6b35;">
                        <i class="fas fa-handshake"></i>
                        Découvrir les partenariats
                    </a>
                    <a href="#contact" class="btn btn-secondary btn-lg" style="background: rgba(255, 255, 255, 0.1); color: white; border: 2px solid rgba(255, 255, 255, 0.3);">
                        <i class="fas fa-envelope"></i>
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Stats Section Start -->
    <section class="section modern-stats-section" style="background: white; padding: 4rem 0;">
        <div class="container">
            <div class="section-title" style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: #1e293b; margin-bottom: 1rem;">
                    Un réseau en pleine expansion
                </h2>
                <p style="font-size: 1.25rem; color: #64748b; max-width: 600px; margin: 0 auto;">
                    Rejoignez une communauté dynamique qui ne cesse de grandir
                </p>
            </div>
            
            <div class="modern-stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; margin-top: 2rem;">
                <div class="modern-stat-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(20px); border-radius: 24px; padding: 2rem 1.5rem; border: 1px solid rgba(0, 0, 0, 0.1); position: relative; overflow: hidden; transition: all 0.3s ease; text-align: center;">
                    <div class="stat-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 2rem; color: white;">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3 style="font-size: 2.5rem; font-weight: 900; color: #1e293b; margin: 0; display: inline-block;">70</h3>
                        <span style="font-size: 2rem; font-weight: 700; color: #ffd23f; margin-left: 0.5rem;">+</span>
                        <p style="font-size: 1.25rem; color: #64748b; margin: 1rem 0 0; font-weight: 500;">Associations actives</p>
                    </div>
                </div>
                
                <div class="modern-stat-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(20px); border-radius: 24px; padding: 2rem 1.5rem; border: 1px solid rgba(0, 0, 0, 0.1); position: relative; overflow: hidden; transition: all 0.3s ease; text-align: center;">
                    <div class="stat-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 2rem; color: white;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3 style="font-size: 2.5rem; font-weight: 900; color: #1e293b; margin: 0; display: inline-block;">4</h3>
                        <span style="font-size: 2rem; font-weight: 700; color: #ffd23f; margin-left: 0.5rem;"></span>
                        <p style="font-size: 1.25rem; color: #64748b; margin: 1rem 0 0; font-weight: 500;">Régions couvertes</p>
                    </div>
                </div>
                
                <div class="modern-stat-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(20px); border-radius: 24px; padding: 2rem 1.5rem; border: 1px solid rgba(0, 0, 0, 0.1); position: relative; overflow: hidden; transition: all 0.3s ease; text-align: center;">
                    <div class="stat-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 2rem; color: white;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="stat-content">
                        <h3 style="font-size: 2.5rem; font-weight: 900; color: #1e293b; margin: 0; display: inline-block;">1000</h3>
                        <span style="font-size: 2rem; font-weight: 700; color: #ffd23f; margin-left: 0.5rem;">+</span>
                        <p style="font-size: 1.25rem; color: #64748b; margin: 1rem 0 0; font-weight: 500;">Étudiants actifs</p>
                    </div>
                </div>
                
                <div class="modern-stat-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(20px); border-radius: 24px; padding: 2rem 1.5rem; border: 1px solid rgba(0, 0, 0, 0.1); position: relative; overflow: hidden; transition: all 0.3s ease; text-align: center;">
                    <div class="stat-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; font-size: 2rem; color: white;">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <div class="stat-content">
                        <h3 style="font-size: 2.5rem; font-weight: 900; color: #1e293b; margin: 0; display: inline-block;">0</h3>
                        <span style="font-size: 2rem; font-weight: 700; color: #ffd23f; margin-left: 0.5rem;">€</span>
                        <p style="font-size: 1.25rem; color: #64748b; margin: 1rem 0 0; font-weight: 500;">Coût d'entrée</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section End -->

    <!-- Types de Partenariats Section Start -->
    <section class="section" id="types-partenariats" style="background: #fef7ed; padding: 6rem 0;">
        <div class="container">
            <div class="section-title" style="text-align: center; margin-bottom: 4rem;">
                <p style="color: #ff6b35; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 1rem; font-size: 0.875rem;">Nos partenariats</p>
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: #1e293b; margin-bottom: 1rem;">
                    Découvrez nos différents types de partenariats
                </h2>
                <p style="font-size: 1.25rem; color: #64748b; max-width: 600px; margin: 0 auto;">
                    Des opportunités variées pour promouvoir votre marque et soutenir la communauté
                </p>
            </div>
            
            <div class="grid" style="display: grid; gap: 3rem;">
                <!-- Bons Plans -->
                <div class="card" style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; border: 1px solid rgba(0, 0, 0, 0.05);">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                        <div>
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; font-size: 2rem; color: white;">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;">Bons Plans & Réductions</h3>
                            <p style="font-size: 1.125rem; color: #64748b; margin-bottom: 2rem; line-height: 1.6;">
                                Proposez des offres exclusives aux étudiants et habitants des communes. 
                                Restaurateurs, commerçants, services... Tous peuvent promouvoir leurs produits 
                                dans notre section dédiée "Bons Plans".
                            </p>
                            <ul style="list-style: none; padding: 0;">
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Visibilité ciblée sur votre audience
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Promotion gratuite de vos offres
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Accès direct aux étudiants et habitants
                                </li>
                            </ul>
                        </div>
                        <div style="position: relative;">
                            <img src="../img/im1.jpg" alt="Bons plans étudiants" style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                </div>

                <!-- Soutien Associatif -->
                <div class="card" style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; border: 1px solid rgba(0, 0, 0, 0.05);">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                        <div style="order: 2;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; font-size: 2rem; color: white;">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;">Soutien Associatif</h3>
                            <p style="font-size: 1.125rem; color: #64748b; margin-bottom: 2rem; line-height: 1.6;">
                                Soutenez des associations et projets associatifs. Nous vous accompagnons 
                                pour trouver la bonne association selon la catégorie, le projet, 
                                la localisation et les événements qui vous correspondent.
                            </p>
                            <ul style="list-style: none; padding: 0;">
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Matching personnalisé avec les associations
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Impact social et RSE valorisé
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Accompagnement personnalisé
                                </li>
                            </ul>
                        </div>
                        <div style="order: 1; position: relative;">
                            <img src="../img/asso.jpg" alt="Soutien associatif" style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                </div>

                <!-- Événements Temporaires -->
                <div class="card" style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; border: 1px solid rgba(0, 0, 0, 0.05);">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                        <div>
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; font-size: 2rem; color: white;">
                                <i class="fas fa-calendar-star"></i>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;">Événements Temporaires</h3>
                            <p style="font-size: 1.125rem; color: #64748b; margin-bottom: 2rem; line-height: 1.6;">
                                Organisez des événements temporaires comme des expositions, conférences, 
                                ateliers... Nous mettons en avant votre événement sur l'application 
                                pour toucher un maximum de participants.
                            </p>
                            <ul style="list-style: none; padding: 0;">
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Promotion d'événements temporaires
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Inscription et gestion des participants
                                </li>
                                <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; font-size: 1rem; color: #1e293b;">
                                    <i class="fas fa-check" style="color: #10b981; font-size: 1.125rem;"></i>
                                    Communication ciblée
                                </li>
                            </ul>
                        </div>
                        <div style="position: relative;">
                            <img src="../img/im3.jpg" alt="Événements temporaires" style="width: 100%; height: 300px; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Types de Partenariats Section End -->

    <!-- Autres Partenariats Section Start -->
    <section class="section" style="background: white; padding: 6rem 0;">
        <div class="container">
            <div class="section-title" style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: #1e293b; margin-bottom: 1rem;">
                    Ouvert à tous les partenariats
                </h2>
                <p style="font-size: 1.25rem; color: #64748b; max-width: 600px; margin: 0 auto;">
                    Votre idée de partenariat ne correspond à aucune catégorie ? 
                    Nous sommes ouverts à toutes les propositions innovantes !
                </p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div class="card" style="background: #fef7ed; border-radius: 20px; padding: 2.5rem; text-align: center; border: 2px solid #ff6b35; transition: all 0.3s ease;">
                    <div style="width: 60px; height: 60px; background: #ff6b35; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; color: #1e293b;">Innovation</h4>
                    <p style="color: #64748b; margin-bottom: 0;">Proposez des idées créatives et innovantes pour enrichir notre plateforme</p>
                </div>
                
                <div class="card" style="background: #fef7ed; border-radius: 20px; padding: 2.5rem; text-align: center; border: 2px solid #ff6b35; transition: all 0.3s ease;">
                    <div style="width: 60px; height: 60px; background: #ff6b35; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; color: #1e293b;">Réseau</h4>
                    <p style="color: #64748b; margin-bottom: 0;">Étendez votre réseau et créez des synergies avec notre communauté</p>
                </div>
                
                <div class="card" style="background: #fef7ed; border-radius: 20px; padding: 2.5rem; text-align: center; border: 2px solid #ff6b35; transition: all 0.3s ease;">
                    <div style="width: 60px; height: 60px; background: #ff6b35; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; color: #1e293b;">Croissance</h4>
                    <p style="color: #64748b; margin-bottom: 0;">Accompagnez notre croissance et celle de notre écosystème</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Autres Partenariats Section End -->

    <!-- CTA Section Start -->
    <section class="section cta-section" style="background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%); color: white; text-align: center; padding: 6rem 0;">
        <div class="container">
            <div style="max-width: 600px; margin: 0 auto;">
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 1.5rem; color: white;">
                    Prêt à rejoindre notre réseau ?
                </h2>
                <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
                    Contactez-nous pour discuter de votre projet de partenariat
                </p>
                <a href="#contact" class="btn btn-primary btn-lg" style="background: white; color: #ff6b35; font-weight: 700; padding: 1rem 2rem; border-radius: 30px; transition: all 0.3s ease;">
                    <i class="fas fa-envelope"></i>
                    Nous contacter
                </a>
            </div>
        </div>
    </section>
    <!-- CTA Section End -->

    <!-- Contact Section Start -->
    <?php include '../components/contact.php'; ?>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <?php include '../components/footer.php'; ?>
    <!-- Footer Section End -->
     
    <!-- Back to Top -->
    <a href="#" class="back-to-top" style="position: fixed; bottom: 2rem; right: 2rem; width: 50px; height: 50px; background: #ff6b35; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; opacity: 0; visibility: hidden; transform: translateY(20px);">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/cursor.js"></script>
</body>

</html>
