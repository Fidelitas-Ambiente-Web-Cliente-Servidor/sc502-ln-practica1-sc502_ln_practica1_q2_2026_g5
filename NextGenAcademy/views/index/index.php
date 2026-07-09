<?php
/** @var array $cursos */
$pageTitle = 'Index';
$depth = 0;
require __DIR__ . '/../layout/header.php';
?>


<br>
<br>

<div>
  <h2>Cursos destacados</h2>
     
</div>
<br>


<div id="Contenedor-tarjetas">

    <?php foreach ($cursos as $curso): ?>

        <div class="card shadow" style="width:25rem;">

            <img src="<?= $curso['imagen'] ?>"
                class="card-img-top imagen-card">

            <div class="card-body">

                <h5 class="card-title">
                    <?= $curso['nombre'] ?>
                </h5>

                <span class="etiqueta-categoria">
                    <?= $curso['categoria'] ?>
                </span>

                <p class="card-text">
                    <?= $curso['descripcion'] ?>
                </p>

                <p class="curso-precio">
                    <?= $curso['precio'] ?>
                </p>


                <button class="btn btn-primary">
                    Ver más
                </button>

            </div>

        </div>

    <?php endforeach; ?>

</div>
<hr>

<h2>Estadísticas</h2>
<br>
<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
            <img src="images/student.png" class="imagen-estadistica" alt="180">
            <br>
            <br>
            <p>500+ estudiantes activos</p>
        </div>
        <div class="col">
            <img src="images/teacher.png" class="imagen-estadistica" alt="180">
            <br>
            <br>
            <p>25+ profesores calificados</p>
        </div>
        <div class="col">
            <img src="images/course.png" class="imagen-estadistica" alt="180">
            <br>
            <br>
            <p>40+ cursos disponibles</p>
        </div>

        <div class="col">
            <img src="images/earth.png" class="imagen-estadistica" alt="180">
            <br>
            <br>
            <p>10+ años de experiencia</p>
        </div>
    </div>
</div>

<hr>
<h2>Testimonios</h2>

<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
            <br>
            <br>
            <p><em>“Antes de entrar a NextGen Academy no tenía experiencia en programación, pero gracias a las clases prácticas y
                    el apoyo de los profesores logré desarrollar mis primeros proyectos en Java.
                    La metodología es muy dinámica y realmente se aprende aplicando los conocimientos.”</em></p>
            <br>
            <p class="Nombre-Estudiante"><em>— María González, Estudiante de Desarrollo Web</em></p>
        </div>
        <div class="col">
            <br>
            <br>
            <p><em>“Los cursos están muy bien estructurados y el contenido se siente actualizado con las tecnologías actuales.
                    Aprendí conceptos de redes y bases de datos que me ayudaron muchísimo en la universidad y en proyectos personales.”</em></p>
            <br>
            <p class="Nombre-Estudiante"><em>— Carlos Ramírez, Estudiante de Ingeniería en Sistemas

        </div>
    </div>
</div>

<br>

<?php require __DIR__ . '/../layout/footer.php'; ?>