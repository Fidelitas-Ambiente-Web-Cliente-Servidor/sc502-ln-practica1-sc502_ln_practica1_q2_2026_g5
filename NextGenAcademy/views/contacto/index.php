<?php 

$pageTitle = 'Contacto - NextGen Academy';
require_once __DIR__ . '/../layout/header.php'; 
?>

<br>
<br>

<h2 class="main-title text-center">Contacto</h2>
<br>

<div class="container mb-5">
    
    <?php if (($status = $_GET['status'] ?? null) === 'success'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Mensaje enviado!</strong> Tu consulta ha sido registrada con éxito en nuestra base de datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif ($status === 'error'): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>¡Error!</strong> Por favor, asegúrate de rellenar todos los campos correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row g-5">
        <section class="col-md-6">
            <div class="card p-4 shadow-sm border-0 bg-white">
                <h3 class="h4 mb-4 title-section" style="color: #1591DC;">Envíanos un mensaje</h3>
                
                <form action="index.php?controller=contacto&action=store" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label sub-paragraph">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Juan Pérez" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label sub-paragraph">Correo Electrónico</label>
                        <input type="email" id="correo" name="correo" class="form-control" placeholder="nombre@ejemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label sub-paragraph">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="8888-8888" required>
                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label sub-paragraph">Asunto</label>
                        <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Motivo de tu consulta" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label sub-paragraph">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold" style="padding: 10px;">Enviar Mensaje</button>
                </form>
            </div>
        </section>

        <section class="col-md-6 d-flex flex-column justify-content-between">
            <div class="card p-4 shadow-sm border-0 bg-white mb-4">
                <h3 class="h4 mb-3 title-section" style="color: #1591DC;">Información de la Academia</h3>
                <p class="sub-paragraph"><strong>📍 Dirección:</strong> 250 metros oeste de la Universidad Fidélitas, San José, Costa Rica.</p>
                <p class="sub-paragraph"><strong>📞 Teléfono:</strong> +506 2200-1100</p>
                <p class="sub-paragraph"><strong>✉️ Correo Electrónico:</strong> info@nextgenacademy.edu</p>
            </div>

            <div class="card p-2 shadow-sm border-0 bg-white flex-grow-1">
              <div class="ratio ratio-16x9 h-100" style="min-height: 300px;">
                    <iframe
                        src="https://maps.google.com/maps?q=San%20Jose,%20Costa%20Rica&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </section>
    </div>
</div>

<br>

<?php 
require_once __DIR__ . '/../layout/footer.php'; 
?>