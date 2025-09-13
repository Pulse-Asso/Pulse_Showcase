// Main JavaScript file for Pulse website - WeWard Style
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize all components
    initSpinner();
    initNavbar();
    initAnimations();
    initContactForm();
    initBackToTop();
    initSmoothScrolling();
    initMobileMenu();
    initScrollAnimations();
    
    // Spinner initialization
    function initSpinner() {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            window.addEventListener('load', function() {
                setTimeout(() => {
                    spinner.classList.remove('show');
                }, 500);
            });
        }
    }
    
    // Navbar effects
    function initNavbar() {
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                    navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                    navbar.style.boxShadow = 'none';
                }
            });
        }
    }
    
    // Mobile menu toggle
    function initMobileMenu() {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarNav = document.querySelector('.navbar-nav');
        
        if (navbarToggler && navbarNav) {
            navbarToggler.addEventListener('click', function() {
                navbarNav.classList.toggle('show');
            });
            
            // Close mobile menu when clicking on a link
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navbarNav.classList.remove('show');
                });
            });
        }
    }
    
    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    // Scroll animations
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        const animateElements = document.querySelectorAll('.card, .feature-card, .testimonial-card, .stat-item');
        animateElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(el);
        });
    }
    
    // Contact form handling
    function initContactForm() {
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(this);
                
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<div class="loading"></div> Envoi en cours...';
                submitBtn.disabled = true;
                
                // Send form data
                fetch('contact.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        showNotification('Message envoyé avec succès !', 'success');
                        contactForm.reset();
                    } else {
                        showNotification('Erreur : ' + data.message, 'error');
                    }
                })
                .catch(error => {
                    showNotification('Une erreur est survenue lors de l\'envoi du message.', 'error');
                    console.error('Error:', error);
                })
                .finally(() => {
                    // Reset button state
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                });
            });
        }
    }
    
    // Notification system
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
        `;
        
        // Set background color based on type
        switch(type) {
            case 'success':
                notification.style.background = '#10b981';
                break;
            case 'error':
                notification.style.background = '#ef4444';
                break;
            default:
                notification.style.background = '#ff6b35';
        }
        
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 5 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 5000);
    }
    
    // Back to top button
    function initBackToTop() {
        const backToTop = document.querySelector('.back-to-top');
        if (backToTop) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            });
            
            backToTop.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }
    
    // Add hover effects to cards
    function initAnimations() {
        const cards = document.querySelectorAll('.card, .feature-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Add click effects to buttons
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    this.removeChild(ripple);
                }, 600);
            });
        });
    }
    
    // Add CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
    
    // Parallax effect removed to fix image jumping issue
    // function initParallax() {
    //     const heroSection = document.querySelector('.hero-section');
    //     if (heroSection) {
    //         window.addEventListener('scroll', function() {
    //             const scrolled = window.pageYOffset;
    //             const rate = scrolled * -0.5;
    //             heroSection.style.transform = `translateY(${rate}px)`;
    //         });
    //     }
    // }
    
    // Initialize parallax - DISABLED
    // initParallax();
    
    // Add active class to navigation links
    function initActiveNavLinks() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        window.addEventListener('scroll', function() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    }
    
    // Initialize active nav links
    initActiveNavLinks();
    
    // Add form validation
    function initFormValidation() {
        const formInputs = document.querySelectorAll('input, textarea');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    validateField(this);
                }
            });
        });
    }
    
    function validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        let errorMessage = '';
        
        // Remove existing error styling
        field.classList.remove('error');
        const existingError = field.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Validation rules
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMessage = 'Ce champ est requis';
        } else if (field.type === 'email' && value && !isValidEmail(value)) {
            isValid = false;
            errorMessage = 'Veuillez entrer une adresse email valide';
        }
        
        // Apply validation result
        if (!isValid) {
            field.classList.add('error');
            const errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            errorElement.style.cssText = `
                color: #ef4444;
                font-size: 0.875rem;
                margin-top: 0.25rem;
            `;
            errorElement.textContent = errorMessage;
            field.parentNode.appendChild(errorElement);
        }
    }
    
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Initialize form validation
    initFormValidation();
    
    // Add keyboard navigation
    function initKeyboardNavigation() {
        document.addEventListener('keydown', function(e) {
            // Escape key closes mobile menu
            if (e.key === 'Escape') {
                const navbarNav = document.querySelector('.navbar-nav');
                if (navbarNav && navbarNav.classList.contains('show')) {
                    navbarNav.classList.remove('show');
                }
            }
            
            // Home key scrolls to top
            if (e.key === 'Home') {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
    }
    
    // Initialize keyboard navigation
    initKeyboardNavigation();
    
    // Add loading states for buttons
    function initLoadingStates() {
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                if (!this.classList.contains('loading') && !this.disabled) {
                    this.classList.add('loading');
                    const originalText = this.innerHTML;
                    this.innerHTML = '<div class="loading"></div> Chargement...';
                    
                    setTimeout(() => {
                        this.classList.remove('loading');
                        this.innerHTML = originalText;
                    }, 2000);
                }
            });
        });
    }
    
    // Initialize loading states
    initLoadingStates();
    
    // Add scroll progress indicator
    function initScrollProgress() {
        const progressBar = document.createElement('div');
        progressBar.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #ff6b35, #f7931e);
            z-index: 10001;
            transition: width 0.3s ease;
        `;
        document.body.appendChild(progressBar);
        
        window.addEventListener('scroll', function() {
            const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            progressBar.style.width = scrolled + '%';
        });
    }
    
    // Initialize scroll progress
    initScrollProgress();
    
    // Guard: remove any injected dark-mode toggle widgets if present
    (function removeDarkModeWidgets() {
        const selectors = [
            '.darkmode-toggle',
            '#darkmode-toggle',
            '[data-theme-toggle]',
            '.theme-toggle',
            '.color-mode-toggle',
            '.darkmode-layer',
            '.darkmode-background',
            'button[aria-label*="dark"]',
            'button[aria-label*="Dark"]',
            'button[title*="dark"]',
            'button[title*="Dark"]'
        ];
        function prune() {
            selectors.forEach(sel => {
                document.querySelectorAll(sel).forEach(el => {
                    el.remove();
                });
            });
        }
        prune();
        const observer = new MutationObserver(prune);
        observer.observe(document.documentElement, { childList: true, subtree: true });
    })();

    // // Add theme toggle (light/dark mode)
    // function initThemeToggle() {
    //     const themeToggle = document.createElement('button');
    //     themeToggle.innerHTML = 'lune';
    //     themeToggle.style.cssText = `
    //         position: fixed;
    //         top: 20px;
    //         right: 20px;
    //         width: 50px;
    //         height: 50px;
    //         border-radius: 50%;
    //         border: none;
    //         background: rgba(255, 255, 255, 0.9);
    //         color: #ff6b35;
    //         font-size: 20px;
    //         cursor: pointer;
    //         z-index: 1000;
    //         box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    //         transition: all 0.3s ease;
    //     `;
        
    //     document.body.appendChild(themeToggle);
        
    //     themeToggle.addEventListener('click', function() {
    //         document.body.classList.toggle('dark-theme');
            // this.innerHTML = document.body.classList.contains('dark-theme') ? 'soleil' : 'lune';
    //     });
    // }
    
    // // Initialize theme toggle
    // initThemeToggle();
    
    // Add performance monitoring
    function initPerformanceMonitoring() {
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            console.log(`Page loaded in ${loadTime.toFixed(2)}ms`);
        });
    }
    
    // Initialize performance monitoring
    initPerformanceMonitoring();
    
    // Video functionality now uses native controls
    
    // Add error handling
    window.addEventListener('error', function(e) {
        console.error('JavaScript error:', e.error);
    });
    
    // Add offline/online detection
    window.addEventListener('online', function() {
        showNotification('Connexion rétablie', 'success');
    });
    
    window.addEventListener('offline', function() {
        showNotification('Connexion perdue', 'error');
    });
    
    // Video functionality now uses native HTML5 controls
    
    // Add final initialization
    console.log('Pulse website initialized successfully - WeWard Style with Orange Theme');
    
    // Dispatch custom event for other scripts
    window.dispatchEvent(new CustomEvent('pulseInitialized', {
        detail: {
            timestamp: Date.now(),
            version: '2.0.0',
            style: 'WeWard Orange'
        }
    }));
    
});

