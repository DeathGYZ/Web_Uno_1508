-- CREAR UNA BASE DE DATOS
CREATE DATABASE crud_app;
USE crud_app;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

INSERT INTO usuarios (nombre, email, telefono) values
	("Julio", "j.c@gmail.com", 5512345678),
    ("Pedro", "p.c@gmail.com", 5521435678);

INSERT INTO usuarios (nombre, email, telefono) values
	("Alejandro", "a.c@gmail.com", 556348576),
    ("Luis", "l.c@gmail.com", 5585637285),
    ("Bruno", "b.c@gmail.com", 5594526483),
    ("Brandon", "bd.c@gmail.com", 5545342957);