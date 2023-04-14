CREATE DATABASE MIBASEMINOMBRE;

GO

USE MIBASEMINOMBRE;
GO

CREATE TABLE USUARIO(ci nvarchar(50) PRIMARY KEY 
					, usuario nvarchar(50)
					, password nvarchar(255)
					, rol nvarchar(255));

GO

INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ('12642534', 'juan_pablo', CONVERT(VARCHAR(255), HashBytes('MD5', 'password123'), 2), 'director');
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ('54645354', 'carrie_white', CONVERT(VARCHAR(255), HashBytes('MD5', 'contrasenia123'), 2), 'docente');
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ('47365646', 'paul_sheldon', CONVERT(VARCHAR(255), HashBytes('MD5', 'password123'), 2), 'docente');
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ('68362354', 'jose_genaro', CONVERT(VARCHAR(255), HashBytes('MD5', 'password123'), 2), 'docente');
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ('72546264', 'roger_alejandro', CONVERT(VARCHAR(255), HashBytes('MD5', 'contrasenia123'), 2), 'docente');
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ('67364456', 'vito_corleone', CONVERT(VARCHAR(255), HashBytes('MD5', 'contrasenia123'), 2), 'docente');

GO

SELECT * FROM USUARIO;

CREATE TABLE PERSONA(ci nvarchar(50) PRIMARY KEY, nombre_completo nvarchar(255), fecha_nacimiento date, telefono varchar(25), departamento varchar(2));

GO

INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('47365646', 'Paul Sheldon', '1987-09-11','+1 263554654345', 'SC');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('68362354', 'Jose Genaro Chauca Pardo', '2002-02-24', '+591 64635354', 'CB');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('72546264', 'Roger Alejandro Guarachi Mamani', '2002-09-11', '+591 74545344', 'LP');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('57326465', 'Humberto Rojas Padilla', '2004-11-12', '+591 24645544', 'TJ');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('12635454', 'Carlos Jahuira', '2002-11-12', '+591 64545344', 'LP');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('23125353', 'Victor Andrade', '2002-03-10', '+591 60643003', 'LP');

GO

CREATE TABLE INSCRIPCION(ci_estudiante varchar(50) PRIMARY KEY, sigla varchar(10), nota1 INT, nota2 INT, nota3 INT, notafinal INT);

GO

INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('23125353', 'INF-324', 100, 100, 100, 100);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('57326465', 'INF-319', 56, 78, 60, 75);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('12635454', 'INF-273', 67, 59, 79, 80);

GO
