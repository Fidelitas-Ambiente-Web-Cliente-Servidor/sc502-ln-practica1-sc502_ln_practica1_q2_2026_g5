<?php
/** @var array $cursos */
/** @var array $categorias */
/** @var string $categoriaSeleccionada */
$pageTitle = 'Catálogo de Cursos';
require __DIR__ . '/../layout/header.php';
?>

<section class="encabezado-catalogo">
    <h1>Catálogo de Cursos</h1>
    <p class="descripcion-catalogo">
        Explora nuestra oferta académica organizada por áreas de conocimiento. Encuentra el curso ideal para
        impulsar tu carrera en tecnología, con clases prácticas, instructores certificados y contenido
        actualizado.
    </p>
</section>

<section class="seccion-filtros" aria-label="Filtrar por categoría">
    <form class="formulario-filtro" method="get" action="index.php">
        <input type="hidden" name="controller" value="cursos">
        <input type="hidden" name="action" value="index">

        <label class="texto-filtros" for="categoria">Filtrar por categoría:</label>

        <div class="controles-filtro">
            <select name="categoria" id="categoria" class="select-categoria">
                <option value="" <?= $categoriaSeleccionada === '' ? 'selected' : '' ?>>Todos</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8') ?>"
                        <?= $categoriaSeleccionada === $categoria ? 'selected' : '' ?>>
                        <?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button class="btn-filtrar" type="submit">Filtrar</button>
        </div>
    </form>
</section>

<h2>Nuestra oferta</h2>

<section class="seccion-cursos" aria-label="Listado de cursos">
    <?php if (empty($cursos)): ?>
        <p class="mensaje-sin-resultados">
            No encontramos cursos en esta categoría. Selecciona otra opción para ver más resultados.
        </p>
    <?php else: ?>
        <div class="container-fluid">
            <div class="row contenedor-tarjetas">
                <?php foreach ($cursos as $curso): ?>
                    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                        <article class="card" style="width: 22rem;">
                            <img src="<?= htmlspecialchars($curso['imagen'], ENT_QUOTES, 'UTF-8') ?>"
                                class="imagen-card"
                                alt="<?= htmlspecialchars($curso['nombre'], ENT_QUOTES, 'UTF-8') ?>">

                            <div class="card-body">
                                <span class="etiqueta-categoria">
                                    <?= htmlspecialchars($curso['categoria'], ENT_QUOTES, 'UTF-8') ?>
                                </span>

                                <h5 class="card-title">
                                    <?= htmlspecialchars($curso['nombre'], ENT_QUOTES, 'UTF-8') ?>
                                </h5>

                                <p class="card-text">
                                    <?= htmlspecialchars($curso['descripcion'], ENT_QUOTES, 'UTF-8') ?>
                                </p>

                                <div class="curso-meta">
                                    <p class="curso-duracion">
                                        &#9201; <?= htmlspecialchars($curso['duracion'], ENT_QUOTES, 'UTF-8') ?>
                                    </p>
                                    <p class="curso-precio">
                                        <?= htmlspecialchars($curso['precio'], ENT_QUOTES, 'UTF-8') ?>
                                    </p>
                                </div>

                                <button class="btn btn-primary w-100" type="button">Ver más</button>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php require __DIR__ . '/../layout/footer.php'; ?>
