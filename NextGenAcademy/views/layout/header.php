<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>NextGen Academy</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cursos.css">
    <link rel="stylesheet" href="css/profesores.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="Menu">
          <div class="container-fluid">
    <a class="navbar-brand" href="index.php?controller=index&action=index">
        <img src="images/logo.png" alt="NextGen Academy" width="180">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['controller'] ?? '') === 'index' ? 'active' : '' ?>" 
                               href="index.php?controller=index&action=index">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['controller'] ?? '') === 'cursos' ? 'active' : '' ?>" 
                               href="index.php?controller=cursos&action=index">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['controller'] ?? '') === 'profesores' ? 'active' : '' ?>" 
                               href="index.php?controller=profesores&action=index">Profesores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['controller'] ?? '') === 'contacto' ? 'active' : '' ?>" 
                               href="index.php?controller=contacto&action=index">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn btn-primary" type="submit">Inscribirme</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main></main>