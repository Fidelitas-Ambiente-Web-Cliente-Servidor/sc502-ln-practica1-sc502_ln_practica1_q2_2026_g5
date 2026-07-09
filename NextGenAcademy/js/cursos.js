
// Código de Tarea 2 — Catálogo de cursos con búsqueda y filtrado dinámico (comentado para Tarea 4)
/*
const cursos = [
    {
        nombre: "Programación básica",
        descripcion: "Aprende variables, estructuras de control, métodos, arreglos y los pilares de la programación orientada a objetos con ejercicios guiados.",
        categoria: "Desarrollo de Software",
        duracion: "8 semanas",
        precio: "$149",
        imagen: "../images/progra.jpg"
    },
    {
        nombre: "Desarrollo Web Full Stack",
        descripcion: "Construye sitios y aplicaciones web con HTML, CSS, JavaScript y fundamentos de backend para proyectos reales.",
        categoria: "Desarrollo de Software",
        duracion: "12 semanas",
        precio: "$219",
        imagen: "../images/web.jpg"
    },
    {
        nombre: "Python para principiantes",
        descripcion: "Domina la sintaxis de Python, estructuras de datos, funciones y automatización de tareas con proyectos prácticos.",
        categoria: "Desarrollo de Software",
        duracion: "10 semanas",
        precio: "$179",
        imagen: "../images/python.jpg"
    },
    {
        nombre: "Introducción a redes",
        descripcion: "Fundamentos de redes informáticas: direccionamiento IP, modelos OSI y TCP/IP, y comunicación entre dispositivos.",
        categoria: "Infraestructura y Datos",
        duracion: "6 semanas",
        precio: "$129",
        imagen: "../images/redes.jpg"
    },
    {
        nombre: "Lenguajes de bases de datos",
        descripcion: "Diseña y administra bases de datos con SQL: tablas, relaciones, llaves primarias y consultas de inserción y actualización.",
        categoria: "Infraestructura y Datos",
        duracion: "9 semanas",
        precio: "$169",
        imagen: "../images/bases.jpg"
    },
    {
        nombre: "Administración de servidores Linux",
        descripcion: "Gestiona usuarios, permisos, servicios y despliegue de aplicaciones en entornos Linux de forma segura y eficiente.",
        categoria: "Infraestructura y Datos",
        duracion: "11 semanas",
        precio: "$199",
        imagen: "../images/linux.jpg"
    }
];

let textoBusqueda = "";
let categoriaSeleccionada = "todos";

function filtrarCursos() {
    return cursos.filter(function (curso) {
        let busqueda = textoBusqueda.trim().toLowerCase();
        let coincideNombre = curso.nombre.toLowerCase().includes(busqueda);
        let coincideDescripcion = curso.descripcion.toLowerCase().includes(busqueda);
        let pasaBusqueda = busqueda === "" || coincideNombre || coincideDescripcion;

        let pasaCategoria = categoriaSeleccionada === "todos" || curso.categoria === categoriaSeleccionada;

        return pasaBusqueda && pasaCategoria;
    });
}

function crearTarjeta(curso) {
    let columna = document.createElement("div");
    columna.className = "col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4";

    let tarjeta = document.createElement("article");
    tarjeta.className = "card";
    tarjeta.style.width = "22rem";

    let imagen = document.createElement("img");
    imagen.src = curso.imagen;
    imagen.className = "imagen-card";
    imagen.alt = curso.nombre;

    let cuerpo = document.createElement("div");
    cuerpo.className = "card-body";

    let etiqueta = document.createElement("span");
    etiqueta.className = "etiqueta-categoria";
    etiqueta.textContent = curso.categoria;

    let titulo = document.createElement("h5");
    titulo.className = "card-title";
    titulo.textContent = curso.nombre;

    let descripcion = document.createElement("p");
    descripcion.className = "card-text";
    descripcion.textContent = curso.descripcion;

    let meta = document.createElement("div");
    meta.className = "curso-meta";

    let duracion = document.createElement("p");
    duracion.className = "curso-duracion";
    duracion.textContent = "⏱ " + curso.duracion;

    let precio = document.createElement("p");
    precio.className = "curso-precio";
    precio.textContent = curso.precio;

    let boton = document.createElement("button");
    boton.className = "btn btn-primary w-100";
    boton.type = "button";
    boton.textContent = "Ver más";

    meta.appendChild(duracion);
    meta.appendChild(precio);

    cuerpo.appendChild(etiqueta);
    cuerpo.appendChild(titulo);
    cuerpo.appendChild(descripcion);
    cuerpo.appendChild(meta);
    cuerpo.appendChild(boton);

    tarjeta.appendChild(imagen);
    tarjeta.appendChild(cuerpo);
    columna.appendChild(tarjeta);

    return columna;
}

function mostrarCursos() {
    let contenedor = document.getElementById("contenedor-cursos");
    let mensaje = document.getElementById("mensaje-sin-resultados");
    let cursosVisibles = filtrarCursos();

    contenedor.innerHTML = "";

    if (cursosVisibles.length === 0) {
        mensaje.hidden = false;
        return;
    }

    mensaje.hidden = true;

    cursosVisibles.forEach(function (curso) {
        contenedor.appendChild(crearTarjeta(curso));
    });
}

function marcarBotonActivo(botonClickeado) {
    let botones = document.querySelectorAll(".btn-filtro");

    botones.forEach(function (boton) {
        boton.classList.remove("activo");
    });

    botonClickeado.classList.add("activo");
}

document.addEventListener("DOMContentLoaded", function () {
    let campoBusqueda = document.getElementById("campo-busqueda");
    let formularioBusqueda = document.querySelector(".formulario-busqueda");
    let botonesFiltro = document.querySelectorAll(".btn-filtro");

    mostrarCursos();

    campoBusqueda.addEventListener("input", function () {
        textoBusqueda = campoBusqueda.value;
        mostrarCursos();
    });

    formularioBusqueda.addEventListener("submit", function (evento) {
        evento.preventDefault();
        textoBusqueda = campoBusqueda.value;
        mostrarCursos();
    });

    botonesFiltro.forEach(function (boton) {
        boton.addEventListener("click", function () {
            categoriaSeleccionada = boton.getAttribute("data-categoria");
            marcarBotonActivo(boton);
            mostrarCursos();
        });
    });
});
*/
