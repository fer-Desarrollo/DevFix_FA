<?php $this->load->view('home/header'); ?>

<main>
    <!-- Hero Contacto -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-header">
                <h1>Contáctanos</h1>
                <p>Estamos aquí para ayudarte. Escríbenos y te responderemos pronto</p>
            </div>
        </div>
    </section>

    <!-- Información de contacto -->
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-methods">
                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Teléfono</h3>
                    <p>+52 55 1234 5678</p>
                    <a href="tel:+525512345678" class="method-link">Llamar ahora</a>
                </div>
                
                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>info@devfix.com</p>
                    <p>soporte@devfix.com</p>
                    <a href="mailto:info@devfix.com" class="method-link">Enviar correo</a>
                </div>
                
                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>+52 55 8765 4321</p>
                    <a href="https://wa.me/525587654321" target="_blank" class="method-link">Escribir por WhatsApp</a>
                </div>
                
                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Oficina</h3>
                    <p>Av. Tecnología 123, Col. Innovación</p>
                    <p>Ciudad de México, CDMX 03940</p>
                    <a href="#map" class="method-link">Ver en mapa</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de contacto -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-header">
                    <h2>Envíanos un mensaje</h2>
                    <p>Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas</p>
                </div>
                
                <form id="contactForm" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nombre completo *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="company">Empresa</label>
                            <input type="text" id="company" name="company">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Correo electrónico *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Teléfono *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Servicio de interés *</label>
                        <select id="service" name="service" required>
                            <option value="">Selecciona un servicio</option>
                            <option value="web">Desarrollo Web</option>
                            <option value="sistemas">Sistemas a Medida</option>
                            <option value="soporte">Soporte Técnico</option>
                            <option value="redes">Redes y Servidores</option>
                            <option value="seguridad">Seguridad Informática</option>
                            <option value="cloud">Cloud y Hosting</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensaje *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Describe tu proyecto o consulta..." required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter" checked>
                            <span>Deseo recibir noticias y ofertas de DEVFIX</span>
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy" required>
                            <span>Acepto la <a href="#">Política de Privacidad</a> *</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn-primary btn-submit">
                        <i class="fas fa-paper-plane"></i>
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Mapa y horarios -->
    <section class="map-hours" id="map">
        <div class="container">
            <div class="map-hours-grid">
                <div class="map-container">
                    <h3>Nuestra Ubicación</h3>
                    <div class="map-placeholder">
                        <!-- En producción, aquí iría un mapa real de Google Maps -->
                        <div class="map-image">
                            <img src="<?= base_url('assets/images/map-placeholder.jpg') ?>" alt="Ubicación DEVFIX">
                            <div class="map-overlay">
                                <a href="https://goo.gl/maps/ejemplo" target="_blank" class="btn-map">
                                    <i class="fas fa-external-link-alt"></i>
                                    Abrir en Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="hours-container">
                    <h3>Horarios de Atención</h3>
                    <div class="hours-table">
                        <div class="hour-row">
                            <span class="day">Lunes - Viernes</span>
                            <span class="time">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="hour-row">
                            <span class="day">Sábados</span>
                            <span class="time">10:00 AM - 2:00 PM</span>
                        </div>
                        <div class="hour-row">
                            <span class="day">Domingos</span>
                            <span class="time">Cerrado</span>
                        </div>
                    </div>
                    
                    <div class="emergency-contact">
                        <h4>Soporte de Emergencia 24/7</h4>
                        <p>Para problemas críticos fuera de horario</p>
                        <div class="emergency-phone">
                            <i class="fas fa-phone-volume"></i>
                            <span>+52 55 9999 8888</span>
                        </div>
                    </div>
                    
                    <div class="social-contact">
                        <h4>Síguenos en redes</h4>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Departamentos -->
    <section class="departments">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contáctanos por Departamento</h2>
                <p class="section-subtitle">Comunícate directamente con el área que necesitas</p>
            </div>
            
            <div class="departments-grid">
                <div class="department-card">
                    <div class="department-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Soporte Técnico</h3>
                    <p>soporte@devfix.com</p>
                    <p>+52 55 1234 5000</p>
                    <a href="mailto:soporte@devfix.com" class="department-link">Contactar soporte</a>
                </div>
                
                <div class="department-card">
                    <div class="department-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Ventas</h3>
                    <p>ventas@devfix.com</p>
                    <p>+52 55 1234 5001</p>
                    <a href="mailto:ventas@devfix.com" class="department-link">Contactar ventas</a>
                </div>
                
                <div class="department-card">
                    <div class="department-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Proyectos</h3>
                    <p>proyectos@devfix.com</p>
                    <p>+52 55 1234 5002</p>
                    <a href="mailto:proyectos@devfix.com" class="department-link">Contactar proyectos</a>
                </div>
                
                <div class="department-card">
                    <div class="department-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Recursos Humanos</h3>
                    <p>rh@devfix.com</p>
                    <p>+52 55 1234 5003</p>
                    <a href="mailto:rh@devfix.com" class="department-link">Contactar RH</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Preguntas antes de contactar -->
    <section class="pre-contact">
        <div class="container">
            <div class="pre-contact-content">
                <h2>Antes de contactarnos</h2>
                <p>Para agilizar tu consulta, ten a mano la siguiente información:</p>
                
                <div class="checklist">
                    <div class="checklist-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Descripción clara de tu necesidad o problema</span>
                    </div>
                    <div class="checklist-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Número de equipos o usuarios afectados</span>
                    </div>
                    <div class="checklist-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Presupuesto aproximado (si aplica)</span>
                    </div>
                    <div class="checklist-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Timeline deseado para el proyecto</span>
                    </div>
                    <div class="checklist-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Información de contacto completa</span>
                    </div>
                </div>
                
                <div class="pre-contact-note">
                    <p><strong>Nota:</strong> Nuestro equipo de ventas se pondrá en contacto contigo en un plazo máximo de 24 horas hábiles. Para emergencias técnicas, utiliza el teléfono de soporte 24/7.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('home/footer'); ?>