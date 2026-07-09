

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS NextGenAcademy_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE NextGenAcademy_db;
CREATE TABLE `cursos_destacados` (
`id_curso_destacado` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `imagen` VARCHAR(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `cursos_destacados` (`nombre`, `descripcion`, `precio`, `categoria`,`imagen`) VALUES
('Programación básica', 'Aprende variables, estructuras de control, métodos, arreglos y los pilares de la programación orientada a objetos con ejercicios guiados.', '$149', 'Desarrollo de software','images/progra.jpg'),
('Introducción a redes', 'Fundamentos de redes informáticas: direccionamiento IP, modelos OSI y TCP/IP, y comunicación entre dispositivos.', '$129', 'Infraestructura y Datos','images/redes.jpg'),
('Lenguajes de bases de datos', 'Diseña y administra bases de datos con SQL: tablas, relaciones, llaves primarias y consultas de inserción y actualización.', '$169', 'Infraestructura y Datos', 'images/bases.jpg');

CREATE TABLE `cursos` (
  `id_curso` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `duracion` varchar(20) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `cursos` (`nombre`, `descripcion`, `categoria`, `duracion`, `precio`, `imagen`) VALUES
('Programación básica', 'Aprende variables, estructuras de control, métodos, arreglos y los pilares de la programación orientada a objetos con ejercicios guiados.', 'Desarrollo de Software', '8 semanas', '$149', 'images/progra.jpg'),
('Desarrollo Web Full Stack', 'Construye sitios y aplicaciones web con HTML, CSS, JavaScript y fundamentos de backend para proyectos reales.', 'Desarrollo de Software', '12 semanas', '$219', 'images/web.jpg'),
('Python para principiantes', 'Domina la sintaxis de Python, estructuras de datos, funciones y automatización de tareas con proyectos prácticos.', 'Desarrollo de Software', '10 semanas', '$179', 'images/python.jpg'),
('Introducción a redes', 'Fundamentos de redes informáticas: direccionamiento IP, modelos OSI y TCP/IP, y comunicación entre dispositivos.', 'Infraestructura y Datos', '6 semanas', '$129', 'images/redes.jpg'),
('Lenguajes de bases de datos', 'Diseña y administra bases de datos con SQL: tablas, relaciones, llaves primarias y consultas de inserción y actualización.', 'Infraestructura y Datos', '9 semanas', '$169', 'images/bases.jpg'),
('Administración de servidores Linux', 'Gestiona usuarios, permisos, servicios y despliegue de aplicaciones en entornos Linux de forma segura y eficiente.', 'Infraestructura y Datos', '11 semanas', '$199', 'images/linux.jpg');

COMMIT;
