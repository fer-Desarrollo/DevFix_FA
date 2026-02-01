<?php $this->load->view('home/header'); ?>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Soluciones TI Profesionales para tu Empresa</h1>
                <p class="hero-subtitle">
                    Soporte técnico, mantenimiento, desarrollo de sistemas y seguridad informática.
                    En DEVFIX resolvemos tus problemas rápido y con garantía.
                </p>

                <div class="hero-buttons">
               <a href="<?= base_url('contacto') ?>" class="btn-primary btn-large">
    Solicitar cotización
</a>


                    <a href="<?= base_url('servicios') ?>" class="btn-secondary btn-large">
                        <i class="fas fa-cogs"></i>
                        Ver servicios
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <img src="<?= base_url('assets/images/hero-bg.jpg') ?>" alt="Soporte TI profesional">

                <div class="hero-stats">
                    <div class="stat">
                        <h3>10+</h3>
                        <p>Años de experiencia</p>
                    </div>
                    <div class="stat">
                        <h3>250+</h3>
                        <p>Clientes satisfechos</p>
                    </div>
                    <div class="stat">
                        <h3>500+</h3>
                        <p>Proyectos realizados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- CTA A CONTACTO -->
<section class="cta-redirect" id="contacto">
    <div class="container">
        <div class="cta-box">

            <h2>Solicita tu cotización profesional</h2>
            <p>
                Cuéntanos qué necesitas y un especialista te contactará de inmediato.
            </p>

            <a href="<?= base_url('contacto') ?>" class="btn-primary btn-large">
                <i class="fas fa-paper-plane"></i>
                Ir a contacto
            </a>

        </div>
    </div>
</section>


    <!-- POR QUÉ ELEGIRNOS -->
    <section class="why-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">¿Por qué elegir DEVFIX?</h2>
                <p class="section-subtitle">Somos tu aliado tecnológico, no solo un proveedor</p>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <i class="fas fa-bolt"></i>
                    <h3>Respuesta rápida</h3>
                    <p>Atendemos en menos de 30 minutos.</p>
                </div>

                <div class="why-card">
                    <i class="fas fa-user-shield"></i>
                    <h3>Expertos certificados</h3>
                    <p>Técnicos profesionales con experiencia real.</p>
                </div>

                <div class="why-card">
                    <i class="fas fa-award"></i>
                    <h3>Garantía de servicio</h3>
                    <p>Todos nuestros trabajos están garantizados.</p>
                </div>

                <div class="why-card">
                    <i class="fas fa-desktop"></i>
                    <h3>Soporte remoto y presencial</h3>
                    <p>Nos adaptamos a tus necesidades.</p>
                </div>

                <div class="why-card">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Precios claros</h3>
                    <p>Sin letras pequeñas ni costos ocultos.</p>
                </div>

                <div class="why-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Atención personalizada</h3>
                    <p>Tratamos tu empresa como propia.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php $this->load->view('home/footer'); ?>
