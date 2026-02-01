<?php $this->load->view('home/header'); ?>

<main>
    <!-- Hero Tecnologías -->
    <section class="technologies-hero">
        <div class="container">
            <div class="technologies-header">
                <h1>Tecnologías y Herramientas</h1>
                <p>Utilizamos las mejores tecnologías del mercado para ofrecer soluciones robustas y modernas</p>
            </div>
        </div>
    </section>

    <!-- Lenguajes de programación -->
    <section class="languages-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Lenguajes de Programación</h2>
                <p class="section-subtitle">Dominamos múltiples lenguajes para adaptarnos a cualquier proyecto</p>
            </div>
            
            <div class="technologies-grid">
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <h3>PHP</h3>
                    <p>Desarrollo backend para aplicaciones web empresariales</p>
                    <div class="tech-level">
                        <div class="level-bar">
                            <div class="level-fill" style="width: 95%"></div>
                        </div>
                        <span class="level-text">Experto</span>
                    </div>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <h3>JavaScript</h3>
                    <p>Interactividad y aplicaciones web del lado del cliente</p>
                    <div class="tech-level">
                        <div class="level-bar">
                            <div class="level-fill" style="width: 90%"></div>
                        </div>
                        <span class="level-text">Avanzado</span>
                    </div>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-python"></i>
                    </div>
                    <h3>Python</h3>
                    <p>Automatización, análisis de datos y aplicaciones empresariales</p>
                    <div class="tech-level">
                        <div class="level-bar">
                            <div class="level-fill" style="width: 85%"></div>
                        </div>
                        <span class="level-text">Avanzado</span>
                    </div>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-java"></i>
                    </div>
                    <h3>Java</h3>
                    <p>Aplicaciones empresariales escalables y sistemas robustos</p>
                    <div class="tech-level">
                        <div class="level-bar">
                            <div class="level-fill" style="width: 80%"></div>
                        </div>
                        <span class="level-text">Intermedio-Avanzado</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frameworks -->
    <section class="frameworks-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frameworks y Plataformas</h2>
                <p class="section-subtitle">Utilizamos frameworks modernos para desarrollo ágil y eficiente</p>
            </div>
            
            <div class="frameworks-grid">
                <div class="framework-card">
                    <div class="framework-logo">
                        <img src="<?= base_url('assets/images/technologies/laravel.png') ?>" alt="Laravel">
                    </div>
                    <h3>Laravel</h3>
                    <p>Framework PHP para aplicaciones web elegantes</p>
                    <ul class="framework-features">
                        <li><i class="fas fa-check"></i> MVC Architecture</li>
                        <li><i class="fas fa-check"></i> Eloquent ORM</li>
                        <li><i class="fas fa-check"></i> Blade Templating</li>
                    </ul>
                </div>
                
                <div class="framework-card">
                    <div class="framework-logo">
                        <img src="<?= base_url('assets/images/technologies/codeigniter.png') ?>" alt="CodeIgniter">
                    </div>
                    <h3>CodeIgniter</h3>
                    <p>Framework PHP ligero y potente</p>
                    <ul class="framework-features">
                        <li><i class="fas fa-check"></i> Arquitectura MVC</li>
                        <li><i class="fas fa-check"></i> Fácil configuración</li>
                        <li><i class="fas fa-check"></i> Alta seguridad</li>
                    </ul>
                </div>
                
                <div class="framework-card">
                    <div class="framework-logo">
                        <img src="<?= base_url('assets/images/technologies/vue.png') ?>" alt="Vue.js">
                    </div>
                    <h3>Vue.js</h3>
                    <p>Framework JavaScript progresivo</p>
                    <ul class="framework-features">
                        <li><i class="fas fa-check"></i> Reactividad</li>
                        <li><i class="fas fa-check"></i> Componentes reutilizables</li>
                        <li><i class="fas fa-check"></i> Fácil integración</li>
                    </ul>
                </div>
                
                <div class="framework-card">
                    <div class="framework-logo">
                        <img src="<?= base_url('assets/images/technologies/react.png') ?>" alt="React">
                    </div>
                    <h3>React</h3>
                    <p>Biblioteca JavaScript para interfaces de usuario</p>
                    <ul class="framework-features">
                        <li><i class="fas fa-check"></i> Virtual DOM</li>
                        <li><i class="fas fa-check"></i> JSX Syntax</li>
                        <li><i class="fas fa-check"></i> Component-based</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bases de datos -->
    <section class="databases-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Bases de Datos</h2>
                <p class="section-subtitle">Manejamos diferentes sistemas de bases de datos según las necesidades del proyecto</p>
            </div>
            
            <div class="databases-grid">
                <div class="database-card">
                    <div class="database-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>MySQL</h3>
                    <p>Sistema de gestión de bases de datos relacional</p>
                    <span class="database-tag">Relacional</span>
                </div>
                
                <div class="database-card">
                    <div class="database-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>PostgreSQL</h3>
                    <p>Sistema de base de datos objeto-relacional</p>
                    <span class="database-tag">ORDBMS</span>
                </div>
                
                <div class="database-card">
                    <div class="database-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>MongoDB</h3>
                    <p>Base de datos NoSQL orientada a documentos</p>
                    <span class="database-tag">NoSQL</span>
                </div>
                
                <div class="database-card">
                    <div class="database-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Firebase</h3>
                    <p>Plataforma de desarrollo de aplicaciones web y móviles</p>
                    <span class="database-tag">BaaS</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Sistemas operativos -->
    <section class="os-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sistemas Operativos</h2>
                <p class="section-subtitle">Compatibilidad multiplataforma para diferentes entornos</p>
            </div>
            
            <div class="os-grid">
                <div class="os-card">
                    <div class="os-icon">
                        <i class="fab fa-windows"></i>
                    </div>
                    <h3>Windows Server</h3>
                    <p>Active Directory, IIS, Exchange</p>
                </div>
                
                <div class="os-card">
                    <div class="os-icon">
                        <i class="fab fa-linux"></i>
                    </div>
                    <h3>Linux</h3>
                    <p>Ubuntu, CentOS, Debian, Red Hat</p>
                </div>
                
                <div class="os-card">
                    <div class="os-icon">
                        <i class="fab fa-apple"></i>
                    </div>
                    <h3>macOS</h3>
                    <p>Entornos de desarrollo y diseño</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servidores y hosting -->
    <section class="servers-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Servidores y Hosting</h2>
                <p class="section-subtitle">Infraestructura robusta para alojar tus aplicaciones</p>
            </div>
            
            <div class="servers-grid">
                <div class="server-card">
                    <div class="server-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>Cloud Hosting</h3>
                    <ul class="server-features">
                        <li>AWS</li>
                        <li>Google Cloud</li>
                        <li>Azure</li>
                        <li>DigitalOcean</li>
                    </ul>
                </div>
                
                <div class="server-card">
                    <div class="server-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Servidores Dedicados</h3>
                    <ul class="server-features">
                        <li>Configuración personalizada</li>
                        <li>Alta disponibilidad</li>
                        <li>Escalabilidad</li>
                        <li>Monitoreo 24/7</li>
                    </ul>
                </div>
                
                <div class="server-card">
                    <div class="server-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Seguridad</h3>
                    <ul class="server-features">
                        <li>Firewalls</li>
                        <li>SSL Certificates</li>
                        <li>DDoS Protection</li>
                        <li>Backup Automático</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Herramientas de soporte -->
    <section class="support-tools">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Herramientas de Soporte</h2>
                <p class="section-subtitle">Sistemas que utilizamos para brindar el mejor soporte técnico</p>
            </div>
            
            <div class="tools-grid">
                <div class="tool-card">
                    <div class="tool-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Remote Desktop</h3>
                    <p>Conexión remota para soporte técnico instantáneo</p>
                </div>
                
                <div class="tool-card">
                    <div class="tool-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Monitoring</h3>
                    <p>Monitoreo en tiempo real de sistemas y redes</p>
                </div>
                
                <div class="tool-card">
                    <div class="tool-icon">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <h3>Ticketing Systems</h3>
                    <p>Seguimiento de incidentes y solicitudes</p>
                </div>
                
                <div class="tool-card">
                    <div class="tool-icon">
                        <i class="fas fa-backward"></i>
                    </div>
                    <h3>Backup Solutions</h3>
                    <p>Soluciones de respaldo y recuperación de datos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodologías -->
    <section class="methodologies">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Metodologías de Trabajo</h2>
                <p class="section-subtitle">Enfoques sistemáticos para garantizar el éxito de cada proyecto</p>
            </div>
            
            <div class="methodologies-content">
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="methodology-text">
                        <h3>Desarrollo Ágil</h3>
                        <p>Utilizamos Scrum y Kanban para desarrollo iterativo e incremental, con sprints de 2 semanas y reuniones diarias de seguimiento.</p>
                    </div>
                </div>
                
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="methodology-text">
                        <h3>Control de Versiones</h3>
                        <p>Git con GitFlow para un control preciso del código fuente, facilitando la colaboración y el deployment continuo.</p>
                    </div>
                </div>
                
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="methodology-text">
                        <h3>Testing Automatizado</h3>
                        <p>Implementamos pruebas unitarias, de integración y de aceptación para garantizar la calidad del software.</p>
                    </div>
                </div>
                
                <div class="methodology-item">
                    <div class="methodology-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="methodology-text">
                        <h3>Seguridad por Diseño</h3>
                        <p>Incorporamos prácticas de seguridad desde la fase de diseño hasta la implementación y mantenimiento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificaciones -->
    <section class="certifications">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Certificaciones y Partnerships</h2>
                <p class="section-subtitle">Estamos certificados en las principales tecnologías del mercado</p>
            </div>
            
            <div class="certifications-grid">
                <div class="certification-card">
                    <div class="certification-logo">
                        <img src="<?= base_url('assets/images/certifications/microsoft.png') ?>" alt="Microsoft Partner">
                    </div>
                    <h3>Microsoft Partner</h3>
                    <p>Certificados en soluciones Microsoft para empresas</p>
                </div>
                
                <div class="certification-card">
                    <div class="certification-logo">
                        <img src="<?= base_url('assets/images/certifications/aws.png') ?>" alt="AWS Partner">
                    </div>
                    <h3>AWS Partner</h3>
                    <p>Especialistas en infraestructura cloud de Amazon Web Services</p>
                </div>
                
                <div class="certification-card">
                    <div class="certification-logo">
                        <img src="<?= base_url('assets/images/certifications/cisco.png') ?>" alt="Cisco Certified">
                    </div>
                    <h3>Cisco Certified</h3>
                    <p>Certificaciones en redes y comunicaciones empresariales</p>
                </div>
                
                <div class="certification-card">
                    <div class="certification-logo">
                        <img src="<?= base_url('assets/images/certifications/comptia.png') ?>" alt="CompTIA">
                    </div>
                    <h3>CompTIA Security+</h3>
                    <p>Certificación en seguridad de la información</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('home/footer'); ?>