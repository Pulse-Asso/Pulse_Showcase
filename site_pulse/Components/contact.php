    <!-- Contact Section Start -->
    <section class="section" id="contact" style="background: white; padding: 6rem 0;">
        <div class="container">
            <div class="section-title" style="text-align: center; margin-bottom: 4rem;">
                <p style="color: #ff6b35; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 1rem; font-size: 0.875rem;">Contact</p>
                <h2 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: #1e293b; margin-bottom: 1rem;">
                    Parlons de votre partenariat
                </h2>
                <p style="font-size: 1.25rem; color: #64748b; max-width: 600px; margin: 0 auto;">
                    Notre équipe est là pour vous accompagner dans votre projet de partenariat.
                </p>
            </div>
            
            <div class="grid grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="card" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 1rem; color: #1e293b;">Informations de contact</h3>
                    <p style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem; color: #64748b;">
                        <i class="fas fa-map-marker-alt" style="color: #ff6b35;"></i> 3 Résidence du parc, Massy
                    </p>
                    <p style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem; color: #64748b;">
                        <i class="fas fa-phone" style="color: #ff6b35;"></i> +33 782582528
                    </p>
                    <p style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 2rem; color: #64748b;">
                        <i class="fas fa-envelope" style="color: #ff6b35;"></i> pulse.pro.event@gmail.com
                    </p>
                    
                    <div style="display: flex; gap: 0.5rem; margin-top: 2rem;">
                        <a href="#" class="btn btn-secondary" style="background: #f8fafc; color: #64748b; border: 1px solid #e2e8f0; padding: 0.75rem 1rem; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-secondary" style="background: #f8fafc; color: #64748b; border: 1px solid #e2e8f0; padding: 0.75rem 1rem; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-secondary" style="background: #f8fafc; color: #64748b; border: 1px solid #e2e8f0; padding: 0.75rem 1rem; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-secondary" style="background: #f8fafc; color: #64748b; border: 1px solid #e2e8f0; padding: 0.75rem 1rem; border-radius: 10px; text-decoration: none; transition: all 0.3s ease;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div class="card" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid rgba(0, 0, 0, 0.05);">
                    <form id="contactForm" action="../contact.php" method="POST">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                            <div>
                                <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #1e293b;">Nom complet</label>
                                <input type="text" id="name" name="name" class="form-control" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 1rem;">
                            </div>
                            <div>
                                <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #1e293b;">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 1rem;">
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 1rem;">
                            <label for="subject" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #1e293b;">Sujet</label>
                            <input type="text" id="subject" name="subject" class="form-control" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 1rem;">
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #1e293b;">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 10px; font-size: 1rem; resize: vertical;"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; background: linear-gradient(135deg, #ff6b35, #f7931e); color: white; border: none; padding: 1rem 2rem; border-radius: 30px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
                                <i class="fas fa-paper-plane"></i>
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->