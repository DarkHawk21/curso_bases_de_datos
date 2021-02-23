CREATE DATABASE IF NOT EXISTS tienda_mascotas;

USE tienda_mascotas;

CREATE TABLE IF NOT EXISTS mascotas (
	id_mascota int,
    nombre varchar(255),
    edad int,
    tipo_id int
);

CREATE TABLE IF NOT EXISTS mascotas_tipo (
	id_tipo_mascota int,
    nombre varchar(255)
);