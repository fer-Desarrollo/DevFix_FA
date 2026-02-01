<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin - DEVFIX</title>

<style>
/* ====== RESET ====== */
* {
    box-sizing: border-box;
    font-family: 'Poppins', Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* ====== BODY ====== */
body {
    background: #f4f6f9;
    padding: 30px;
}

/* ====== HEADER ====== */
.admin-header {
    background: #0d6efd;
    color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.admin-header h2 {
    font-weight: 600;
}

.logout-btn {
    background: #dc3545;
    color: #fff;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
}

.logout-btn:hover {
    background: #bb2d3b;
}

/* ====== CARD ====== */
.card {
    background: #fff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 8px 20px rgba(0,0,0,.05);
}

/* ====== TABLE ====== */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

thead {
    background: #0d6efd;
    color: #fff;
}

th, td {
    padding: 12px;
    text-align: left;
    font-size: 14px;
}

tbody tr:nth-child(even) {
    background: #f8f9fa;
}

tbody tr:hover {
    background: #eef3ff;
}

/* ====== BADGE ====== */
.badge {
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    color: white;
}

.badge-nuevo { background: #198754; }
.badge-proceso { background: #ffc107; color:#000; }
.badge-cerrado { background: #dc3545; }

/* ====== FOOTER ====== */
.footer {
    text-align: center;
    margin-top: 30px;
    font-size: 13px;
    color: #888;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 768px) {
    body {
        padding: 15px;
    }

    table {
        font-size: 12px;
    }
}
</style>

</head>
<body>

<!-- HEADER -->
<div class="admin-header">
    <h2>Panel de Administración</h2>
    <a href="<?= base_url('auth/logout') ?>" class="logout-btn">Cerrar sesión</a>
</div>

<!-- CARD -->
<div class="card">
    <p>👋 Bienvenido, <b><?= $this->session->userdata('nombre') ?></b></p>
    <h3 style="margin-top:15px;">Contactos Recibidos</h3>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($contactos as $c): ?>
            <tr>
                <td><?= $c->nombre ?></td>
                <td><?= $c->correo ?></td>
                <td><?= $c->telefono ?></td>
                <td><?= $c->mensaje ?></td>
                <td><?= date('d/m/Y H:i', strtotime($c->fecha_envio)) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="footer">
    DEVFIX © <?= date('Y') ?> - Panel Administrativo
</div>

</body>
</html>
