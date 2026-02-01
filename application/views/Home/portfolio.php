<?php $this->load->view('home/header'); ?>

<main>
    <!-- Hero Portafolio -->
    <section class="portfolio-hero">
        <div class="container">
            <div class="portfolio-header">
                <h1>Nuestro Portafolio</h1>
                <p>Proyectos destacados que hemos desarrollado para nuestros clientes</p>
            </div>
        </div>
    </section>

    <!-- Filtros de categorías -->
    <section class="portfolio-filters">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="web">Desarrollo Web</button>
                <button class="filter-btn" data-filter="sistemas">Sistemas</button>
                <button class="filter-btn" data-filter="redes">Redes</button>
                <button class="filter-btn" data-filter="soporte">Soporte</button>
            </div>
        </div>
    </section>

    <!-- Proyectos -->
    <section class="portfolio-projects">
        <div class="container">
            <div class="projects-grid">
                <!-- Proyecto 1 -->
                <div class="project-card" data-category="web">
                    <div class="project-image">
                        <img src="<?= base_url('assets/images/projects/ecommerce.jpg') ?>" alt="Tienda Online">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Tienda Online - ModaExpress</h3>
                        <p>Plataforma de e-commerce con carrito de compras, pasarela de pagos y panel de administración.</p>
                        <div class="project-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">JavaScript</span>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="project-card" data-category="sistemas">
                    <div class="project-image">
                        <img src="<?= base_url('assets/images/projects/crm.jpg') ?>" alt="Sistema CRM">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Sistema CRM - Constructora MX</h3>
                        <p>CRM personalizado para gestión de clientes, proyectos y seguimiento de ventas.</p>
                        <div class="project-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">Vue.js</span>
                            <span class="tag">PostgreSQL</span>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="project-card" data-category="web">
                    <div class="project-image">
                        <img src="<?= base_url('assets/images/projects/restaurant.jpg') ?>" alt="Sitio Restaurante">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Sitio Web - Restaurante La Tradición</h3>
                        <p>Web responsive con reservaciones en línea, menú digital y sistema de pedidos.</p>
                        <div class="project-tags">
                            <span class="tag">WordPress</span>
                            <span class="tag">CSS3</span>
                            <span class="tag">jQuery</span>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4 -->
                <div class="project-card" data-category="redes">
                    <div class="project-image">
                        <img src="<?= base_url('assets/images/projects/network.jpg') ?>" alt="Red Empresarial">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Infraestructura de Red - Corporativo ABC</h3>
                        <p>Implementación de red empresarial con VLANs, firewall y sistema de monitoreo.</p>
                        <div class="project-tags">
                            <span class="tag">Cisco</span>
                            <span class="tag">Ubiquiti</span>
                            <span class="tag">Firewall</span>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 5 -->
                <div class="project-card" data-category="sistemas">
                    <div class="project-image">
                        <img src="<?= base_url('assets/images/projects/inventory.jpg') ?>" alt="Sistema Inventarios">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Sistema de Inventarios - Ferretería Central</h3>
                        <p>Sistema para control de inventario, ventas y reportes en tiempo real.</p>
                        <div class="project-tags">
                            <span class="tag">CodeIgniter</span>
                            <span class="tag">Bootstrap</span>
                            <span class="tag">MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 6 -->
                <div class="project-card" data-category="soporte">
                    <div class="project-image">
                        <img src="<?= base_url('assets/images/projects/support.jpg') ?>" alt="Soporte Técnico">
                        <div class="project-overlay">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Soporte IT - Clínica Dental</h3>
                        <p>Mantenimiento preventivo y correctivo de equipos, backup y seguridad.</p>
                        <div class="project-tags">
                            <span class="tag">Windows</span>
                            <span class="tag">Backup</span>
                            <span class="tag">Seguridad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clientes -->
    <section class="portfolio-clients">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Clientes que Confían en Nosotros</h2>
                <p class="section-subtitle">Empresas y organizaciones que hemos tenido el placer de atender</p>
            </div>
            
            <div class="clients-logos">
                <div class="client-logo">
                    <img src="<?= base_url('assets/images/clients/client1.png') ?>" alt="Cliente 1">
                </div>
                <div class="client-logo">
                    <img src="<?= base_url('assets/images/clients/client2.png') ?>" alt="Cliente 2">
                </div>
                <div class="client-logo">
                    <img src="<?= base_url('assets/images/clients/client3.png') ?>" alt="Cliente 3">
                </div>
                <div class="client-logo">
                    <img src="<?= base_url('assets/images/clients/client4.png') ?>" alt="Cliente 4">
                </div>
                <div class="client-logo">
                    <img src="<?= base_url('assets/images/clients/client5.png') ?>" alt="Cliente 5">
                </div>
                <div class="client-logo">
                    <img src="<?= base_url('assets/images/clients/client6.png') ?>" alt="Cliente 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Antes y después -->
    <section class="portfolio-before-after">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Transformaciones Digitales</h2>
                <p class="section-subtitle">Ve el impacto de nuestras soluciones</p>
            </div>
            
            <div class="comparison-slider">
                <div class="comparison-item">
                    <div class="before">
                        <h4>Antes</h4>
                        <img src="<?= base_url('assets/images/comparison/before1.jpg') ?>" alt="Antes">
                        <p>Sistema manual, procesos lentos</p>
                    </div>
                    <div class="after">
                        <h4>Después</h4>
                        <img src="<?= base_url('assets/images/comparison/after1.jpg') ?>" alt="Después">
                        <p>Automatización completa, 60% más eficiente</p>
                    </div>
                </div>
                
                <div class="comparison-item">
                    <div class="before">
                        <h4>Antes</h4>
                        <img src="<?= base_url('assets/images/comparison/before2.jpg') ?>" alt="Antes">
                        <p>Red obsoleta, constantes fallas</p>
                    </div>
                    <div class="after">
                        <h4>Después</h4>
                        <img src="<?= base_url('assets/images/comparison/after2.jpg') ?>" alt="Después">
                        <p>Infraestructura moderna, 99.9% uptime</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('home/footer'); ?>