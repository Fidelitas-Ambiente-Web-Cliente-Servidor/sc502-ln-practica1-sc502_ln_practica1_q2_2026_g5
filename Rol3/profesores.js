const profesores = [ // Array de objetos con los profesores
    {
        id: 1,
        nombre: "Ana Rodríguez",
        especialidad: "Desarrollo Web Full Stack",
        descripcion: "Ingeniera en Sistemas con 8 años de experiencia. Especialista en HTML, CSS, JavaScript y React.",
        foto: "../images/profesor1.png",
        correo: "ana.rodriguez@nextgenacademy.com",
        cursosQueImparte: "HTML5, CSS3, JavaScript, React, Node.js"
    },
    {
        id: 2,
        nombre: "Carlos Méndez",
        especialidad: "Bases de Datos y SQL",
        descripcion: "Administrador de bases de datos certificado. Ha trabajado con MySQL, PostgreSQL y SQL Server.",
        foto: "../images/profesor2.png",
        correo: "carlos.mendez@nextgenacademy.com",
        cursosQueImparte: "MySQL, PostgreSQL, SQL Server, MongoDB"
    },
    {
        id: 3,
        nombre: "Laura Fernández",
        especialidad: "Programación en Python",
        descripcion: "Desarrolladora backend con dominio en Python, Django y Flask. Apasionada por la enseñanza.",
        foto: "../images/profesor3.png",
        correo: "laura.fernandez@nextgenacademy.com",
        cursosQueImparte: "Python, Django, Flask, APIs"
    },
    {
        id: 4,
        nombre: "Roberto Jiménez",
        especialidad: "Diseño UX/UI y Frontend",
        descripcion: "Diseñador con experiencia en Figma y desarrollo de interfaces accesibles y responsivas.",
        foto: "../images/profesor4.png",
        correo: "roberto.jimenez@nextgenacademy.com",
        cursosQueImparte: "Figma, UX/UI, CSS Avanzado, Accesibilidad Web"
    }
];

function renderizarTarjetas() {
    let contenedor = document.getElementById("Contenedor-profesores");
    contenedor.innerHTML = "";
    
    // Usando forEach para recorrer el array
    profesores.forEach(profesor => {
        let tarjeta = document.createElement("div");
        tarjeta.className = "card-de-profesores";
        tarjeta.style.width = "22rem";
        tarjeta.setAttribute("data-id", profesor.id);
        
        tarjeta.innerHTML = `
            <img src="${profesor.foto}" class="imagen-profesor" alt="Foto de ${profesor.nombre}">
            <div class="card-body">
                <h5 class="card-title">${profesor.nombre}</h5>
                <h6 class="especialidad">${profesor.especialidad}</h6>
                <p class="card-text">${profesor.descripcion.substring(0, 100)}...</p>
            </div>
        `;
        
        tarjeta.addEventListener("click", function() {
            let id = this.getAttribute("data-id");
            abrirModal(id);
        });
        
        contenedor.appendChild(tarjeta);
    });
}

function abrirModal(id) {
    let profesor = profesores.find(p => p.id == id);
    
    if (profesor) {
        document.getElementById("modalNombre").innerText = profesor.nombre;         // Modal del profesor
        document.getElementById("modalFoto").src = profesor.foto;
        document.getElementById("modalEspecialidad").innerText = profesor.especialidad;
        document.getElementById("modalDescripcion").innerText = profesor.descripcion;
        document.getElementById("modalCorreo").innerText = profesor.correo;
        document.getElementById("modalCursos").innerText = profesor.cursosQueImparte;
        
        let modal = document.getElementById("modalProfesor");
        modal.style.display = "flex";
    }
}

function cerrarModal() {
    let modal = document.getElementById("modalProfesor");
    modal.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function() {
    renderizarTarjetas();
    
    let modal = document.getElementById("modalProfesor");
    let btnCerrar = document.querySelector(".modal-cerrar");
    
    btnCerrar.addEventListener("click", cerrarModal);
    
    modal.addEventListener("click", function(event) {
        if (event.target === modal) {
            cerrarModal();
        }
    });
});