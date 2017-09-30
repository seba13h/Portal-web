CREATE DATABASE mantenedor_alumnos;
USE mantenedor_alumnos;

CREATE TABLE student(
	rut varchar(10) PRIMARY KEY,
	nombre varchar(50),
	apellido varchar(50),
	curso varchar(3)
);

CREATE TABLE admin(
	id int PRIMARY KEY auto_increment,
	name varchar(50),
	pass varchar(50)	
);

