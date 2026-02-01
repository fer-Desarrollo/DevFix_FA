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

<!-- Formulario -->
<section class="contact-form-section">
<div class="container">
<div class="form-container">

<div class="form-header">
    <h2>Envíanos un mensaje</h2>
    <p>Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas</p>
</div>

<form id="contactForm" class="contact-form" novalidate>

    <div class="form-row">
        <input type="text" id="name" name="name" placeholder="Nombre completo *">
        <input type="text" id="company" name="company" placeholder="Empresa">
    </div>

    <div class="form-row">
        <input type="email" id="email" name="email" placeholder="Correo electrónico *">
        <input type="tel" id="phone" name="phone" placeholder="Teléfono *">
    </div>

    <select id="service" name="service">
        <option value="">Servicio de interés *</option>
        <option value="web">Desarrollo Web</option>
        <option value="sistemas">Sistemas a Medida</option>
        <option value="soporte">Soporte Técnico</option>
        <option value="redes">Redes</option>
    </select>

    <textarea id="message" name="message" rows="5" placeholder="Mensaje *"></textarea>

    <button type="submit" class="btn-primary btn-submit">
        <i class="fas fa-paper-plane"></i> Enviar mensaje
    </button>
</form>

</div>
</div>
</section>

</main>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const required = ['name','email','phone','service','message'];

    for (let id of required) {
        if (!document.getElementById(id).value.trim()) {
            Swal.fire({
                icon: 'error',
                title: 'Campos incompletos',
                text: 'Por favor completa todos los campos obligatorios'
            });
            return;
        }
    }

    fetch('<?= base_url("contacto/enviar") ?>', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Mensaje enviado',
            text: 'Te contactaremos pronto'
        });
        this.reset();
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudo enviar el mensaje, intenta nuevamente'
        });
    });
});
</script>

<?php $this->load->view('home/footer'); ?>
