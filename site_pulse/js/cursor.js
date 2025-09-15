// Curseur personnalisé START
        document.addEventListener('DOMContentLoaded', function() {
            const cursor = document.querySelector('.custom-cursor');

            if (cursor) {
                document.addEventListener('mousemove', function(e) {
                    cursor.style.left = e.clientX + 'px';
                    cursor.style.top = e.clientY + 'px';
                });

                // Effet au clic
                document.addEventListener('mousedown', function() {
                    cursor.classList.add('active');
                });
                document.addEventListener('mouseup', function() {
                    cursor.classList.remove('active');
                });

                // Add hover effect to interactive elements
                const interactiveElements = document.querySelectorAll('a, button, .nav-link, .dropdown-item, .btn');
                interactiveElements.forEach(element => {
                    element.addEventListener('mouseenter', function() {
                        cursor.classList.add('hover');
                    });
                    element.addEventListener('mouseleave', function() {
                        cursor.classList.remove('hover');
                    });
                });
            }

            // Animation des compteurs (une seule fois) - Optimisée pour les performances
            let countersAnimated = false;
            function animateCounters() {
                if (countersAnimated) return;
                const counters = document.querySelectorAll('.counter');
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 1500;
                    const increment = target / (duration / 16);
                    let current = 0;
                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                            counter.classList.add('animate');
                        }
                    };
                    updateCounter();
                });
                countersAnimated = true;
            }

            const observerOptions = { threshold: 0.3, rootMargin: '0px 0px -50px 0px' };
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.classList.contains('modern-stats-section')) {
                            setTimeout(animateCounters, 500);
                        }
                    }
                });
            }, observerOptions);

            const statsSection = document.querySelector('.modern-stats-section');
            if (statsSection) {
                observer.observe(statsSection);
            }

            const cardObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, { threshold: 0.05 });

            const statCards = document.querySelectorAll('.modern-stat-card');
            statCards.forEach(card => {
                card.style.animationPlayState = 'paused';
                cardObserver.observe(card);
            });
        });
// Curseur personnalisé FIN