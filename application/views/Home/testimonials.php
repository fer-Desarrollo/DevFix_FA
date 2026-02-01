<?php $this->load->view('home/header'); ?>

<main>
    <!-- Hero Testimonios -->
    <section class="testimonials-hero">
        <div class="container">
            <div class="testimonials-header">
                <h1>Lo que Dicen Nuestros Clientes</h1>
                <p>Testimonios reales de empresas y profesionales que han confiado en nuestros servicios</p>
            </div>
        </div>
    </section>

    <!-- Testimonios principales -->
    <section class="featured-testimonials">
        <div class="container">
            <div class="testimonials-slider" id="testimonialsSlider">
                <!-- Testimonio 1 -->
                <div class="testimonial-slide active">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">"DEVFIX transformó completamente nuestra infraestructura tecnológica. De tener sistemas obsoletos y constantes fallas, ahora tenemos procesos automatizados y una red confiable. Su equipo profesional y comprometido superó nuestras expectativas."</p>
                        
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="<?= base_url('assets/images/testimonials/avatar1.jpg') ?>" alt="Juan Pérez">
                            </div>
                            <div class="author-info">
                                <h4>Juan Pérez</h4>
                                <p>Director de Tecnología - Corporativo ABC</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">5.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">"Como pequeña empresa, necesitábamos una solución económica pero efectiva. DEVFIX nos desarrolló un sistema de inventarios perfecto para nuestras necesidades. El soporte post-venta es excepcional, siempre están disponibles cuando los necesitamos."</p>
                        
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="<?= base_url('assets/images/testimonials/avatar2.jpg') ?>" alt="María González">
                            </div>
                            <div class="author-info">
                                <h4>María González</h4>
                                <p>Propietaria - Ferretería Central</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="testimonial-text">"El equipo de DEVFIX nos rescató cuando nuestro servidor colapsó. No solo recuperaron todos los datos, sino que implementaron una solución robusta de backup y seguridad. Su respuesta rápida evitó pérdidas millonarias para nuestra empresa."</p>
                        
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="<?= base_url('assets/images/testimonials/avatar3.jpg') ?>" alt="Carlos Rodríguez">
                            </div>
                            <div class="author-info">
                                <h4>Carlos Rodríguez</h4>
                                <p>Gerente General - Constructora MX</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">5.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slider-controls">
                <button class="slider-prev" id="prevTestimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
                <button class="slider-next" id="nextTestimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonios en tarjetas -->
    <section class="testimonials-cards">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Más Opiniones de Clientes</h2>
                <p class="section-subtitle">Conoce la experiencia de otros clientes satisfechos</p>
            </div>
            
            <div class="testimonials-grid">
                <!-- Testimonio Card 1 -->
                <div class="testimonial-card">
                    <div class="card-header">
                        <div class="client-avatar">
                            <img src="<?= base_url('assets/images/testimonials/avatar4.jpg') ?>" alt="Ana López">
                        </div>
                        <div class="client-info">
                            <h4>Ana López</h4>
                            <p>Restaurante La Tradición</p>
                        </div>
                        <div class="client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>"Nuestro sitio web con sistema de reservas ha incrementado nuestras ventas en un 40%. Excelente trabajo y atención personalizada."</p>
                    </div>
                    <div class="card-footer">
                        <span class="date">Mayo 2023</span>
                    </div>
                </div>

                <!-- Testimonio Card 2 -->
                <div class="testimonial-card">
                    <div class="card-header">
                        <div class="client-avatar">
                            <img src="<?= base_url('assets/images/testimonials/avatar5.jpg') ?>" alt="Roberto Sánchez">
                        </div>
                        <div class="client-info">
                            <h4>Roberto Sánchez</h4>
                            <p>Clínica Dental Sonrisas</p>
                        </div>
                        <div class="client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>"El soporte técnico para nuestros 50 equipos ha sido impecable. Respuesta rápida y soluciones efectivas. Los recomendamos 100%."</p>
                    </div>
                    <div class="card-footer">
                        <span class="date">Marzo 2023</span>
                    </div>
                </div>

                <!-- Testimonio Card 3 -->
                <div class="testimonial-card">
                    <div class="card-header">
                        <div class="client-avatar">
                            <img src="<?= base_url('assets/images/testimonials/avatar6.jpg') ?>" alt="Laura Martínez">
                        </div>
                        <div class="client-info">
                            <h4>Laura Martínez</h4>
                            <p>Tienda ModaExpress</p>
                        </div>
                        <div class="client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>"Nuestra tienda online funciona perfectamente. El equipo de DEVFIX fue muy profesional y entendió exactamente lo que necesitábamos."</p>
                    </div>
                    <div class="card-footer">
                        <span class="date">Enero 2023</span>
                    </div>
                </div>

                <!-- Testimonio Card 4 -->
                <div class="testimonial-card">
                    <div class="card-header">
                        <div class="client-avatar">
                            <img src="<?= base_url('assets/images/testimonials/avatar7.jpg') ?>" alt="Miguel Ángel">
                        </div>
                        <div class="client-info">
                            <h4>Miguel Ángel Torres</h4>
                            <p>Escuela Primaria México</p>
                        </div>
                        <div class="client-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>"Implementaron nuestro laboratorio de cómputo y la red escolar. Todo funciona perfectamente y los profesores están muy contentos."</p>
                    </div>
                    <div class="card-footer">
                        <span class="date">Noviembre 2022</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calificaciones promedio -->
    <section class="ratings-summary">
        <div class="container">
            <div class="summary-content">
                <div class="summary-stats">
                    <div class="stat-item">
                        <h3>4.8</h3>
                        <p>Calificación promedio</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <h3>95%</h3>
                        <p>Clientes satisfechos</p>
                    </div>
                    
                    <div class="stat-item">
                        <h3>150+</h3>
                        <p>Testimonios verificados</p>
                    </div>
                </div>
                
                <div class="summary-cta">
                    <h2>¿Listo para ser nuestro próximo caso de éxito?</h2>
                    <a href="#contacto" class="btn-primary">Contáctanos ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de testimonio -->
    <section class="add-testimonial">
        <div class="container">
            <div class="add-testimonial-content">
                <h2>Comparte tu experiencia</h2>
                <p>Si has trabajado con nosotros, nos encantaría conocer tu opinión</p>
                
                <form class="testimonial-form" id="testimonialForm">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" placeholder="Nombre completo" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Empresa o cargo" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <select required>
                                <option value="">Servicio contratado</option>
                                <option value="web">Desarrollo Web</option>
                                <option value="sistemas">Sistemas a Medida</option>
                                <option value="soporte">Soporte Técnico</option>
                                <option value="redes">Redes y Servidores</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="rating-input">
                            <span>Calificación:</span>
                            <div class="stars-input">
                                <i class="far fa-star" data-rating="1"></i>
                                <i class="far fa-star" data-rating="2"></i>
                                <i class="far fa-star" data-rating="3"></i>
                                <i class="far fa-star" data-rating="4"></i>
                                <i class="far fa-star" data-rating="5"></i>
                                <input type="hidden" id="ratingValue" name="rating" value="0">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <textarea placeholder="Comparte tu experiencia con DEVFIX..." rows="5" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" required>
                            <span>Acepto que mi testimonio sea publicado en el sitio web</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary">Enviar testimonio</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('home/footer'); ?>