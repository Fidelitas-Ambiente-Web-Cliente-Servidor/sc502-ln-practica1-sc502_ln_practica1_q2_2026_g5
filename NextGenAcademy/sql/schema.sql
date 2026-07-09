

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
COMMIT;
