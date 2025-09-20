// Curseur personnalisé START
document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.querySelector('.custom-cursor');
    if (!cursor) return; // Si pas de curseur dans le DOM -> stop

    // Désactive sur les écrans tactiles
    if (!window.matchMedia('(pointer: fine)').matches) {
        cursor.style.display = 'none';
        return;
    }

    // Styles de base (au cas où non définis en CSS)
    cursor.style.position = 'fixed';
    cursor.style.left = '0';
    cursor.style.top = '0';
    cursor.style.pointerEvents = 'none';
    cursor.style.willChange = 'transform';
    cursor.style.zIndex = '100000';

    // Déplacement fluide avec transform + requestAnimationFrame
    let lastX = 0, lastY = 0, raf = null;
    const draw = () => {
        cursor.style.transform = `translate3d(${lastX}px, ${lastY}px, 0)`;
        raf = null;
    };
    document.addEventListener('pointermove', (e) => {
        lastX = e.clientX;
        lastY = e.clientY;
        if (!raf) raf = requestAnimationFrame(draw);
    }, { passive: true });

    // Effet clic
    document.addEventListener('pointerdown', () => cursor.classList.add('active'));
    document.addEventListener('pointerup',   () => cursor.classList.remove('active'));
    document.addEventListener('mouseleave',  () => cursor.classList.remove('active'));

    // Hover sur les éléments interactifs (via délégation → fonctionne aussi si contenu dynamique)
    document.addEventListener('mouseover', (e) => {
        const el = e.target.closest('a, button, .nav-link, .dropdown-item, .btn');
        cursor.classList.toggle('hover', !!el);
    });
    document.addEventListener('mouseout', (e) => {
        if (!e.relatedTarget || !e.relatedTarget.closest ||
            !e.relatedTarget.closest('a, button, .nav-link, .dropdown-item, .btn')) {
            cursor.classList.remove('hover');
        }
    });

    // -------------------------------
    // Animation des compteurs (optimisée pour ne s'exécuter qu'une fois)
    // -------------------------------
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
    if (statsSection) observer.observe(statsSection);

    // -------------------------------
    // Observer pour les cartes (animation au scroll)
    // -------------------------------
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
