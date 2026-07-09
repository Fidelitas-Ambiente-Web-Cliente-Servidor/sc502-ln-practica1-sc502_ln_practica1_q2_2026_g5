<?php
/** @var array $profesor Datos del profesor desde el controlador */
?>

<?php require __DIR__ . '/../layout/header.php'; ?>

<main>
    <br>
    <br>

    <div style="max-width: 800px; margin: 0 auto; padding: 0 20px;">

        <a href="index.php?controller=profesores&action=index" class="btn btn-secondary" style="margin-bottom: 20px; background-color: #6c757d; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;">
            ← Volver al listado
        </a>

        <div style="padding: 30px; border: 1px solid #ddd; border-radius: 8px; background-color: white;">
            <div style="text-align: center;">
                <img src="<?= htmlspecialchars($profesor['foto']) ?>" alt="Foto de <?= htmlspecialchars($profesor['nombre']) ?>" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; border: 4px solid #1591DC;">
            </div>

            <h2 style="text-align: center; margin-top: 20px; color: #1591DC; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                <?= htmlspecialchars($profesor['nombre']) ?>
            </h2>
            <h4 style="text-align: center; color: #1591DC; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                <?= htmlspecialchars($profesor['especialidad']) ?>
            </h4>

            <hr style="margin: 20px 0; border: none; border-top: 1px solid #ddd;">

            <p><strong>Biografía:</strong></p>
            <p style="font-size: 18px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #333; line-height: 1.6;">
                <?= nl2br(htmlspecialchars($profesor['bio'])) ?>
            </p>

            <div style="margin-top: 20px; padding: 15px; background-color: #f9f9f9; border-radius: 8px; border: 1px solid #ddd;">
                <p><strong>ID del profesor:</strong> <?= $profesor['id_profesor'] ?></p>
                <p><strong>Estado:</strong> <?= $profesor['activo'] ? 'Activo' : 'Inactivo' ?></p>
            </div>
        </div>
    </div>

    <br>

<?php require __DIR__ . '/../layout/footer.php'; ?>