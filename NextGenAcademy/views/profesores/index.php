<?php require __DIR__ . '/../layout/header.php'; ?>

<main>
    <br>
    <br>

    <h2>Nuestros Profesores - NextGen Academy</h2>
    <br>

    <div id="Contenedor-profesores">
        <?php if (!empty($profesores)): ?>
            <?php foreach ($profesores as $profesor): ?>
                <div class="card-de-profesores" style="width: 22rem;">
                    <img src="<?= htmlspecialchars($profesor['foto']) ?>" class="imagen-profesor" alt="Foto de <?= htmlspecialchars($profesor['nombre']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($profesor['nombre']) ?></h5>
                        <h6 class="especialidad"><?= htmlspecialchars($profesor['especialidad']) ?></h6>
                        <p class="card-text"><?= htmlspecialchars(substr($profesor['bio'], 0, 100)) ?>...</p>
                        <a href="index.php?controller=profesores&action=show&id=<?= $profesor['id_profesor'] ?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align:center; font-size:18px; color:#666;">No hay profesores registrados.</p>
        <?php endif; ?>
    </div>

    <hr>

    <section id="mision-vision">
        <h2>Mision y Vision</h2>
        <br>
        <div class="contenedor-mision-vision">
            <div class="mision">
                <h5>Mision</h5>
                <br>
                <p>Formar profesionales competentes en tecnologia, brindando educación de calidad con profesores
                    altamente capacitados y un enfoque práctico que prepare a los estudiantes para el mundo laboral.
                </p>
            </div>
            <div class="vision">
                <h5>Visión</h5>
                <br>
                <p>Ser la academia de tecnologia lider en la region, reconocida por la excelencia de sus profesores
                    y el exito profesional de sus graduados para el año 2030.</p>
            </div>
        </div>
    </section>

    <br>

<?php require __DIR__ . '/../layout/footer.php'; ?>