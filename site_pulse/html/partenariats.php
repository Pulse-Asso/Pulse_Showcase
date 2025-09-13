<!DOCTYPE html>
<html lang="fr">

<?php include '../components/head.php'; ?>

<body>
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>
    
    <!-- Navbar Start -->
    <?php include '../components/navbar.php'; ?>
    <!-- Navbar End -->
     
    <!-- Hero Section Start -->
    <section class="hero-section partenariats-page">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Rejoignez notre <span class="highlight">réseau de partenaires</span>
                </h1>
                <p class="hero-subtitle">
                    Boostez votre visibilité auprès de <strong>+70 associations</strong> et de milliers d'étudiants dans <strong>4 régions</strong>
                </p>
                <div class="hero-buttons" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="#types-partenariats" class="btn btn-primary btn-lg">
                        <i class="fas fa-handshake"></i>
                        Découvrir les partenariats
                    </a>
                    <a href="../html/contact.php" class="btn btn-secondary btn-lg">
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
                <div class="stat-item" style="text-align: center;">
                    <div style="position: relative; display: inline-block;">
                        <div style="width: 60px; height: 3px; background: linear-gradient(135deg, #ff6b35, #f7931e); margin: 0 auto 1rem; border-radius: 2px;"></div>
                        <div style="display: flex; align-items: baseline; justify-content: center; margin-bottom: 0.5rem;">
                            <span class="counter" data-target="70" style="font-size: 2rem; font-weight: 700; color: #1e293b; font-family: 'Inter', sans-serif; line-height: 1;">0</span>
                            <span style="font-size: 1.25rem; font-weight: 600; color: #ff6b35; margin-left: 0.25rem;">+</span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em;">Associations actives</p>
                    </div>
                </div>
                
                <div class="stat-item" style="text-align: center;">
                    <div style="position: relative; display: inline-block;">
                        <div style="width: 60px; height: 3px; background: linear-gradient(135deg, #ff6b35, #f7931e); margin: 0 auto 1rem; border-radius: 2px;"></div>
                        <div style="display: flex; align-items: baseline; justify-content: center; margin-bottom: 0.5rem;">
                            <span class="counter" data-target="4" style="font-size: 2rem; font-weight: 700; color: #1e293b; font-family: 'Inter', sans-serif; line-height: 1;">0</span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em;">Régions couvertes</p>
                    </div>
                </div>
                
                <div class="stat-item" style="text-align: center;">
                    <div style="position: relative; display: inline-block;">
                        <div style="width: 60px; height: 3px; background: linear-gradient(135deg, #ff6b35, #f7931e); margin: 0 auto 1rem; border-radius: 2px;"></div>
                        <div style="display: flex; align-items: baseline; justify-content: center; margin-bottom: 0.5rem;">
                            <span class="counter" data-target="1000" style="font-size: 2rem; font-weight: 700; color: #1e293b; font-family: 'Inter', sans-serif; line-height: 1;">0</span>
                            <span style="font-size: 1.25rem; font-weight: 600; color: #ff6b35; margin-left: 0.25rem;">+</span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em;">Étudiants actifs</p>
                    </div>
                </div>
                
                <div class="stat-item" style="text-align: center;">
                    <div style="position: relative; display: inline-block;">
                        <div style="width: 60px; height: 3px; background: linear-gradient(135deg, #ff6b35, #f7931e); margin: 0 auto 1rem; border-radius: 2px;"></div>
                        <div style="display: flex; align-items: baseline; justify-content: center; margin-bottom: 0.5rem;">
                            <span class="counter" data-target="0" style="font-size: 2rem; font-weight: 700; color: #1e293b; font-family: 'Inter', sans-serif; line-height: 1;">0</span>
                            <span style="font-size: 1.25rem; font-weight: 600; color: #ff6b35; margin-left: 0.25rem;">€</span>
                        </div>
                        <p style="font-size: 0.875rem; color: #64748b; margin: 0; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em;">Coût d'entrée</p>
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
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; min-height: 320px;">
                        <div>
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
                        <div style="position: relative; display: flex; align-items: center; justify-content: center; height: 100%;">
                            <img src="../img/promo.png" alt="Bons plans étudiants" style="width: 100%; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                            <div style="position: absolute; top: 30px; right: 20px; width: 50px; height: 50px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; color: white; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soutien Associatif -->
                <div class="card" style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; border: 1px solid rgba(0, 0, 0, 0.05);">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; min-height: 320px;">
                        <div style="order: 2;">
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
                        <div style="order: 1; position: relative; display: flex; align-items: center; justify-content: center; height: 100%;">
                            <img src="../img/rse.jpg" alt="Soutien associatif" style="width: 100%; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                            <div style="position: absolute; top: 30px; right: 20px; width: 50px; height: 50px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; color: white; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Événements Temporaires -->
                <div class="card" style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; border: 1px solid rgba(0, 0, 0, 0.05);">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; min-height: 320px;">
                        <div>
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
                        <div style="position: relative; display: flex; align-items: center; justify-content: center; height: 100%;">
                            <img src="../img/festival.jpg" alt="Événements temporaires" style="width: 100%; height: 280px; object-fit: cover; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);">
                            <div style="position: absolute; top: 30px; right: 20px; width: 50px; height: 50px; background: linear-gradient(135deg, #ff6b35, #f7931e); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; color: white; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Types de Partenariats Section End -->

    <!-- Contact Section Start -->
    <?php include '../components/contact.php'; ?>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <?php include '../components/footer.php'; ?>
    <!-- Footer End -->

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