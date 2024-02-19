DROP DATABASE IF EXISTS incidencias;
CREATE DATABASE incidencias;
USE incidencias;

CREATE TABLE usuarios (
  usuariosID int(255) AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  apellidos VARCHAR(100) NOT NULL,
  telefono INT(9) NOT NULL,
  email VARCHAR(100) NOT NULL,
  PRIMARY KEY (usuariosID)
);
CREATE TABLE incidencias (
  incidenciasID int(255) AUTO_INCREMENT NOT NULL,
  usuariosID int(255) NOT NULL,
  departamento INT(3) NOT NULL,
  asunto VARCHAR(100) NOT NULL,
  descripcion VARCHAR(255) NOT NULL,
  PRIMARY KEY (incidenciasID),
  FOREIGN KEY (usuariosID) REFERENCES usuarios(usuariosID)
);