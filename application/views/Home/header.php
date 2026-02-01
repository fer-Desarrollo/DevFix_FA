<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVFIX - Soluciones TI Profesionales</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="DEVFIX">
                    </a>
                </div>
                
                <div class="nav-menu" id="navMenu">
                    <ul class="nav-list">
                        <li><a href="<?= base_url() ?>" class="nav-link">Inicio</a></li>
                        <li><a href="<?= base_url('servicios') ?>" class="nav-link">Servicios</a></li>
                        <li><a href="<?= base_url('nosotros') ?>" class="nav-link">Nosotros</a></li>
                        <li><a href="<?= base_url('portafolio') ?>" class="nav-link">Portafolio</a></li>
                        <li><a href="<?= base_url('testimonios') ?>" class="nav-link">Testimonios</a></li>
                        <li><a href="<?= base_url('tecnologias') ?>" class="nav-link">Tecnologías</a></li>
                        <li><a href="<?= base_url('contacto') ?>" class="nav-link">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="header-contact">                    
                    <a href="#cotizar" class="btn-primary btn-quote">
                        <i class="fas fa-paper-plane"></i>
                        Solicitar cotización
                    </a>
                    
                    <div class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>
        </div>
    </header>