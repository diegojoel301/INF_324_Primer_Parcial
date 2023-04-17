CREATE TABLE USUARIO(ci varchar(50), usuario varchar(50),password varchar(255), rol varchar(100), PRIMARY KEY (ci));

INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ("12642534", "juan_pablo", md5("password123"), "director");
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ("54645354", "carrie_white", md5("contrasenia123"), "docente");
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ("47365646", "paul_sheldon", md5("password123"), "docente");
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ("68362354", "jose_genaro", md5("password123"), "docente");
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ("72546264", "roger_alejandro", md5("contrasenia"), "docente");
INSERT INTO USUARIO(ci, usuario, password, rol) VALUES ("67364456", "vito_corleone", md5("vito_corleone_xd"), "docente");


CREATE TABLE PERSONA(ci varchar(50), nombre_completo varchar(255), fecha_nacimiento date, telefono varchar(25), departamento varchar(2), PRIMARY KEY (ci));

INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ("47365646", "Paul Sheldon", '1987-09-11','+1 263554654345', '01');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ("68362354", "Jose Genaro Chauca Pardo", '2002-02-24', '+591 64635354', '03');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ("72546264", "Roger Alejandro Guarachi Mamani", '2002-09-11', '+591 74545344', '02');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ("57326465", "Humberto Rojas Padilla", '2004-11-12', '+591 24645544', '04');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ("12635454", "Carlos Jahuira", '2002-11-12', '+591 64545344', '01');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ("23125353", "Victor Andrade", '2002-03-10', '+591 60643003', '02');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('86545636', 'Andres Quintana', '2003-05-12', '+591 674356455', '01');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('87863444', 'Humberto Rojas Padilla', '2004-11-12', '+591 24645544', '02');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('58372644', 'Joel Ramirez', '2002-11-12', '+591 64545344', '01');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('12353454', 'Jhoel Legua', '2002-03-10', '+591 34573455', '02');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('23421523', 'Fernando Cuevas', '2003-05-12', '+591 234523524', '01');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('64383645', 'Antonio Padilla', '2005-03-12', '+591 24645544', '04');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('36466366', 'Jose Ramirez', '2004-02-12', '+591 37462254', '03');
INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('45634655', 'Hernando Garcia', '2003-01-10', '+591 46534755', '04');


CREATE TABLE INSCRIPCION(ci_estudiante varchar(50), sigla varchar(10), nota1 INT, nota2 INT, nota3 INT, notafinal INT, PRIMARY KEY(ci_estudiante));

INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('23125353', 'INF-324', 100, 100, 100, 100);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('57326465', 'INF-319', 56, 78, 60, 75);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('12635454', 'INF-273', 67, 59, 79, 80);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('86545636', 'INF-273', 56, 70, 12, 71);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('87863444', 'INF-131', 66, 60, 32, 81);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('58372644', 'INF-121', 76, 50, 42, 62);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('12353454', 'INF-111', 86, 40, 62, 73);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('23421523', 'INF-324', 96, 40, 82, 74);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('64383645', 'INF-324', 36, 30, 92, 75);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('36466366', 'INF-319', 46, 20, 42, 76);
INSERT INTO INSCRIPCION(ci_estudiante, sigla, nota1, nota2, nota3, notafinal) VALUES ('45634655', 'INF-324', 56, 70, 52, 87);
