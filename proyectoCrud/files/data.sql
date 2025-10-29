-- Crear la base de datos
CREATE DATABASE crud_app;

-- Seleccionar la base de datos
USE crud_app;

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

-- Insertar valores
INSERT INTO `usuarios` VALUES 
(1,'Julio Camargo','jc@gmail.com','5536393029'),
(3,'Javier Hernándezz','jh@gmail.com','552453861'),
(4,'Roberto Alvarado','ra@gmail.com','5502175926'),
(5,'Omar Bravo','ob@gmail.com','550452950'),
(6,'Adolfo Bautista','ab@gmail.com','5502635486'),
(7,'Oswaldo Sanchez','os@gmail.com','5510364956');