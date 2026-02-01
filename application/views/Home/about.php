<?php $this->load->view('home/header'); ?>

<main>
    <!-- Hero Nosotros -->
    <section class="about-hero">
        <div class="container">
            <div class="about-header">
                <h1>Acerca de DEVFIX</h1>
                <p>Más de 10 años transformando negocios con soluciones tecnológicas de vanguardia</p>
            </div>
        </div>
    </section>

    <!-- Nuestra historia -->
    <section class="our-history">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestra Historia</h2>
                <p class="section-subtitle">De un pequeño equipo a líderes en consultoría TI</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2013</div>
                    <div class="timeline-content">
                        <h3>Fundación</h3>
                        <p>DEVFIX nace como un pequeño equipo de 3 profesionales apasionados por la tecnología, ofreciendo soporte técnico básico a empresas locales.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h3>Primera expansión</h3>
                        <p>Incorporamos servicios de desarrollo web y duplicamos nuestro equipo. Atendemos nuestro primer proyecto corporativo importante.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2018</div>
                    <div class="timeline-content">
                        <h3>Certificaciones y crecimiento</h3>
                        <p>Obtenemos certificaciones Microsoft y Cisco. Expandimos nuestros servicios a redes empresariales y seguridad informática.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2021</div>
                    <div class="timeline-content">
                        <h3>Transformación digital</h3>
                        <p>Lanzamos nuestra división de transformación digital, ayudando a empresas a migrar a la nube y adoptar tecnologías modernas.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content">
                        <h3>Presente y futuro</h3>
                        <p>Equipo de 25+ profesionales, más de 250 clientes satisfechos y expansión a soluciones de inteligencia artificial y automatización.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión, Visión y Valores -->
    <section class="mission-vision">
        <div class="container">
            <div class="mv-grid">
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Misión</h3>
                    <p>Proporcionar soluciones tecnológicas innovadoras y personalizadas que impulsen la productividad, seguridad y crecimiento de nuestros clientes, superando sus expectativas con profesionalismo y excelencia.</p>
                </div>
                
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visión</h3>
                    <p>Ser la consultora TI de referencia en México para 2025, reconocida por nuestra capacidad de transformar negocios a través de tecnologías disruptivas y un servicio excepcional.</p>
                </div>
                
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Valores</h3>
                    <ul class="values-list">
                        <li><i class="fas fa-check-circle"></i> <strong>Integridad:</strong> Honestidad y transparencia en cada proyecto</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Innovación:</strong> Siempre a la vanguardia tecnológica</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Compromiso:</strong> Resultados garantizados</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Colaboración:</strong> Trabajo en equipo con nuestros clientes</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Excelencia:</strong> Calidad en cada detalle</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipo -->
    <section class="our-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestro Equipo</h2>
                <p class="section-subtitle">Profesionales apasionados por la tecnología</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-photo">
                        <img src="<?= base_url('assets/images/team/ceo.jpg') ?>" alt="CEO">
                    </div>
                    <div class="team-info">
                        <h3>Carlos Mendoza</h3>
                        <p class="team-position">CEO & Fundador</p>
                        <p class="team-bio">Más de 15 años en TI. Ingeniero en Sistemas con maestría en Tecnologías de la Información.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-photo">
                        <img src="<?= base_url('assets/images/team/cto.jpg') ?>" alt="CTO">
                    </div>
                    <div class="team-info">
                        <h3>Ana Rodríguez</h3>
                        <p class="team-position">CTO</p>
                        <p class="team-bio">Especialista en arquitectura de sistemas y seguridad informática. Certificaciones AWS y Cisco.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-photo">
                        <img src="<?= base_url('assets/images/team/development.jpg') ?>" alt="Desarrollo">
                    </div>
                    <div class="team-info">
                        <h3>Miguel Torres</h3>
                        <p class="team-position">Director de Desarrollo</p>
                        <p class="team-bio">Experto en desarrollo de software empresarial. Especializado en Laravel y Vue.js.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-stack-overflow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-card">
                    <div class="team-photo">
                        <img src="<?= base_url('assets/images/team/support.jpg') ?>" alt="Soporte">
                    </div>
                    <div class="team-info">
                        <h3>Laura Sánchez</h3>
                        <p class="team-position">Gerente de Soporte</p>
                        <p class="team-bio">10 años en soporte técnico empresarial. Certificaciones Microsoft y CompTIA.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultura -->
    <section class="company-culture">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nuestra Cultura</h2>
                <p class="section-subtitle">Más que un trabajo, una pasión compartida</p>
            </div>
            
            <div class="culture-features">
                <div class="culture-item">
                    <div class="culture-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Aprendizaje Continuo</h3>
                    <p>Invertimos en la capacitación constante de nuestro equipo para mantenernos a la vanguardia.</p>
                </div>
                
                <div class="culture-item">
                    <div class="culture-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Trabajo en Equipo</h3>
                    <p>Fomentamos la colaboración y el apoyo mutuo para lograr mejores resultados.</p>
                </div>
                
                <div class="culture-item">
                    <div class="culture-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Pasión por la Tecnología</h3>
                    <p>Cada proyecto es una oportunidad para innovar y superar expectativas.</p>
                </div>
                
                <div class="culture-item">
                    <div class="culture-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Equilibrio Vida-Trabajo</h3>
                    <p>Promovemos horarios flexibles y un ambiente de trabajo saludable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Logros -->
    <section class="achievements">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Logros y Reconocimientos</h2>
                <p class="section-subtitle">El esfuerzo y la excelencia tienen su recompensa</p>
            </div>
            
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Premio a la Innovación Tecnológica 2022</h3>
                    <p>Reconocidos por nuestra solución de transformación digital para PYMES.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Microsoft Gold Partner</h3>
                    <p>Certificados como socio Gold en soluciones empresariales Microsoft.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Mejor Servicio al Cliente 2023</h3>
                    <p>Votados por nuestros clientes como la empresa con mejor servicio post-venta.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>4.9/5 en Google Reviews</h3>
                    <p>Calificación promedio basada en más de 150 reseñas verificadas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-content">
                <h2>¿Listo para trabajar con nosotros?</h2>
                <p>Únete a las más de 250 empresas que ya confían en DEVFIX para sus soluciones tecnológicas.</p>
                <div class="cta-buttons">
                    <a href="#contacto" class="btn-primary btn-large">Contáctanos</a>
                    <a href="<?= base_url('portafolio') ?>" class="btn-secondary btn-large">Ver nuestros trabajos</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('home/footer'); ?>