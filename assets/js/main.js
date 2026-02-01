// Toggle del menú móvil
const menuToggle = document.getElementById('menuToggle');
const navMenu = document.getElementById('navMenu');

if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
}

// Cerrar menú al hacer clic en un enlace
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
    });
});

// Formulario de contacto
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Aquí iría la lógica para enviar el formulario
        alert('Gracias por tu mensaje. Te contactaremos pronto.');
        contactForm.reset();
    });
}

// Scroll suave para enlaces internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Animación al hacer scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, observerOptions);

// Observar elementos para animación
document.querySelectorAll('.service-card, .client-card, .why-card, .process-step').forEach(el => {
    observer.observe(el);
});

// Agregar al archivo main.js existente

// ===== FUNCIONALIDAD PARA PORTAFOLIO =====
function initPortfolioFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Agregar clase active al botón clickeado
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filterValue === 'all' || filterValue === category) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

// ===== FUNCIONALIDAD PARA TESTIMONIOS =====
function initTestimonialsSlider() {
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prevTestimonial');
    const nextBtn = document.getElementById('nextTestimonial');
    
    let currentSlide = 0;
    
    function showSlide(n) {
        // Ocultar todos los slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remover active de todos los dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Asegurar que el índice esté dentro del rango
        if (n >= slides.length) {
            currentSlide = 0;
        } else if (n < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = n;
        }
        
        // Mostrar el slide actual
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }
    
    // Navegación con botones
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            showSlide(currentSlide - 1);
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            showSlide(currentSlide + 1);
        });
    }
    
    // Navegación con dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Auto slide cada 5 segundos
    setInterval(() => {
        showSlide(currentSlide + 1);
    }, 5000);
}

// ===== RATING SYSTEM PARA TESTIMONIOS =====
function initRatingSystem() {
    const stars = document.querySelectorAll('.stars-input i');
    const ratingValue = document.getElementById('ratingValue');
    
    if (stars.length > 0) {
        stars.forEach(star => {
            star.addEventListener('click', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                
                // Actualizar valor oculto
                if (ratingValue) {
                    ratingValue.value = rating;
                }
                
                // Actualizar estrellas visualmente
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('far');
                        s.classList.add('fas', 'active');
                    } else {
                        s.classList.remove('fas', 'active');
                        s.classList.add('far');
                    }
                });
            });
            
            // Efecto hover
            star.addEventListener('mouseover', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('far');
                        s.classList.add('fas');
                    }
                });
            });
            
            star.addEventListener('mouseout', () => {
                const currentRating = ratingValue ? parseInt(ratingValue.value) : 0;
                
                stars.forEach((s, index) => {
                    if (index >= currentRating) {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });
    }
}

// ===== INICIALIZACIÓN DE COMPONENTES =====
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar componentes según la página actual
    const path = window.location.pathname;
    
    // Filtros de portafolio
    if (document.querySelector('.filter-btn')) {
        initPortfolioFilters();
    }
    
    // Slider de testimonios
    if (document.querySelector('.testimonials-slider')) {
        initTestimonialsSlider();
    }
    
    // Sistema de rating
    if (document.querySelector('.stars-input')) {
        initRatingSystem();
    }
    
    // Formulario de testimonio
    const testimonialForm = document.getElementById('testimonialForm');
    if (testimonialForm) {
        testimonialForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const ratingValue = document.getElementById('ratingValue');
            if (ratingValue && ratingValue.value === '0') {
                alert('Por favor, selecciona una calificación con las estrellas.');
                return;
            }
            
            alert('¡Gracias por tu testimonio! Lo revisaremos y publicaremos pronto.');
            testimonialForm.reset();
            
            // Resetear estrellas
            if (ratingValue) {
                ratingValue.value = '0';
                document.querySelectorAll('.stars-input i').forEach(star => {
                    star.classList.remove('fas', 'active');
                    star.classList.add('far');
                });
            }
        });
    }
});

// ===== ANIMACIONES AL SCROLL =====
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.tech-card, .framework-card, .database-card, .project-card, .testimonial-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

// Inicializar animaciones al cargar
window.addEventListener('load', function() {
    initScrollAnimations();
});

// ===== FUNCIONALIDAD PARA FAQ =====
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Cerrar otros items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Alternar item actual
            item.classList.toggle('active');
        });
    });
}

// ===== FUNCIONALIDAD PARA FORMULARIOS =====
function initForms() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validación básica
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = 'var(--accent)';
                    isValid = false;
                } else {
                    field.style.borderColor = '#ddd';
                }
            });
            
            if (!isValid) {
                alert('Por favor, completa todos los campos requeridos.');
                return;
            }
            
            // Simular envío
            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
            submitBtn.disabled = true;
            
            // Simular delay de envío
            setTimeout(() => {
                alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
                contactForm.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }
}

// ===== INICIALIZACIÓN =====
document.addEventListener('DOMContentLoaded', function() {
    // FAQ
    if (document.querySelector('.faq-item')) {
        initFAQ();
    }
    
    // Formularios
    initForms();
    
    // Validación de formularios en tiempo real
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.style.borderColor = 'var(--accent)';
                } else {
                    this.style.borderColor = '#ddd';
                }
            });
            
            input.addEventListener('input', function() {
                this.style.borderColor = '#ddd';
            });
        });
    });
});