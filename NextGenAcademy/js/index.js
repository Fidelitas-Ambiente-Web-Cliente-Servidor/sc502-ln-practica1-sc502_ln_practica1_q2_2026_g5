
//Array de 3 cursos con propiedades
/*
let cursos = [
    {
        nombre: "Programación básica",
        descripcion: "Aprende variables, estructuras de control, métodos, arreglos y los pilares de la programación orientada a objetos con ejercicios guiados.",
        imagen: "../images/progra.jpg",
        categoria: "Desarrollo de software"
    },

    {
        nombre: "Introducción a redes",
        descripcion: "Fundamentos de redes informáticas: direccionamiento IP, modelos OSI y TCP/IP, y comunicación entre dispositivos.",
        imagen: "../images/redes.jpg",
        categoria: "Infraestructura y Datos"
    },
    {
        nombre: "Lenguajes de bases de datos",
        descripcion: "Diseña y administra bases de datos con SQL: tablas, relaciones, llaves primarias y consultas de inserción y actualización.",
        imagen: "../images/bases.jpg",
        categoria: "Infraestructura y Datos"
    }

];

//Usar createElement y appendChild para construir tarjeta

let contenedor = document.getElementById("Contenedor-tarjetas");

for (let i = 0; i < cursos.length; i++) {

    let tarjeta = document.createElement("div");
    tarjeta.className = "card shadow";
    tarjeta.style.width = "22rem";
    tarjeta.style.transition = "transform 0.3s ease";

    tarjeta.addEventListener("mouseover", function () {
        tarjeta.style.transform = "translateY(-10px)";
    });

    tarjeta.addEventListener("mouseout", function () {
        tarjeta.style.transform = "translateY(0px)";
    });

    let imagen = document.createElement("img");
    imagen.src = cursos[i].imagen;
    imagen.className = "card-img-top imagen-card";

    let cuerpo = document.createElement("div");
    cuerpo.className = "card-body";


    let titulo = document.createElement("h5");
    titulo.className = "card-title";
    titulo.textContent = cursos[i].nombre;

    let categoria = document.createElement("span");
    categoria.className = "etiqueta-categoria";
    categoria.textContent = cursos[i].categoria;

    let descripcion = document.createElement("p");
    descripcion.className = "card-text";
    descripcion.textContent = cursos[i].descripcion;


    let boton = document.createElement("button");
    boton.className = "btn btn-primary";
    boton.textContent = "Ver más";

    cuerpo.appendChild(titulo);
    cuerpo.appendChild(categoria);
    cuerpo.appendChild(descripcion);
    cuerpo.appendChild(boton);

    tarjeta.appendChild(imagen);
    tarjeta.appendChild(cuerpo);

    contenedor.appendChild(tarjeta);
}*/


