DROP DATABASE IF EXISTS BDportafolio;
CREATE DATABASE BDportafolio;
USE BDportafolio;

CREATE TABLE ALINEACION(
	id_portafolio INT AUTO_INCREMENT,
	nom_analista VARCHAR(40),
	fecha_creacion DATE,
	PRIMARY KEY (id_portafolio)
);

CREATE TABLE CRITERIO(
	id_criterio INT,
	nombre_criterio VARCHAR(15),
	tipo VARCHAR(15),
	PRIMARY KEY(id_criterio)
);

CREATE TABLE PROYECTO(
	id_proyecto INT,
	descripcion VARCHAR(100),
	costo INT,
	portafolio INT,
	PRIMARY KEY(id_proyecto),
	FOREIGN KEY(portafolio) REFERENCES ALINEACION(id_portafolio)

);

CREATE TABLE PONDERACION(
	portafolio INT,
	criterio INT,
	ponderacion INT,
	FOREIGN KEY(portafolio) REFERENCES ALINEACION(id_portafolio),
	FOREIGN KEY(criterio) REFERENCES CRITERIO(id_criterio)

);

CREATE TABLE VALOR(
	proyecto INT,
	criterio INT,
	FOREIGN KEY(criterio) REFERENCES CRITERIO(id_criterio),
	FOREIGN KEY(proyecto) REFERENCES ALINEACION(id_proyecto)

);