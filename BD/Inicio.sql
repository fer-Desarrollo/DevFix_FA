-- ============================================
-- BASE DE DATOS: CONSULTORIA
-- ============================================

DROP DATABASE IF EXISTS consultoria_db;
CREATE DATABASE consultoria_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE consultoria_db;

-- ============================================
-- TABLA: usuarios (login admin / consultores)
-- ============================================

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin','consultor') DEFAULT 'consultor',
    activo TINYINT(1) DEFAULT 1,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABLA: contactos (formulario clientes)
-- ============================================

CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    telefono VARCHAR(20),
    mensaje TEXT NOT NULL,
    estado ENUM('nuevo','en_proceso','cerrado') DEFAULT 'nuevo',
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_contactos_correo ON contactos(correo);
CREATE INDEX idx_calificaciones_fecha ON calificaciones(fecha);
CREATE INDEX idx_usuarios_correo ON usuarios(correo);

INSERT INTO usuarios (nombre, correo, password, rol)
VALUES ('Admin', 'admin@devfix.com', '12345', 'admin');
