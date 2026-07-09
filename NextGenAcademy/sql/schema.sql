

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

-- Profesores

CREATE TABLE `profesores` (
  `id_profesor` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `foto` varchar(150) NOT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `profesores` (`nombre`, `especialidad`, `bio`, `foto`, `activo`) VALUES
('Ana Rodríguez', 'Desarrollo Web Full Stack', 'Ingeniera en Sistemas con 8 años de experiencia. Especialista en HTML, CSS, JavaScript y React.', 'images/profesor1.png', 1),
('Carlos Méndez', 'Bases de Datos y SQL', 'Administrador de bases de datos certificado. Ha trabajado con MySQL, PostgreSQL y SQL Server.', 'images/profesor2.png', 1),
('Laura Fernández', 'Programación en Python', 'Desarrolladora backend con dominio en Python, Django y Flask. Apasionada por la enseñanza.', 'images/profesor3.png', 1),
('Roberto Jiménez', 'Diseño UX/UI y Frontend', 'Diseñador con experiencia en Figma y desarrollo de interfaces accesibles y responsivas.', 'images/profesor4.png', 1),
('María Torres', 'Inteligencia Artificial', 'Doctora en Ciencias de la Computación. Especialista en Machine Learning y Procesamiento de Lenguaje Natural.', 'images/profesor5.png', 1);

COMMIT;
