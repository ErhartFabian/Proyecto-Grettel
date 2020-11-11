DROP DATABASE IF EXISTS BDportafolio;
CREATE DATABASE BDportafolio;
USE BDportafolio;

CREATE TABLE ALINEACION(
	id_portafolio INT AUTO_INCREMENT,
	nom_analista VARCHAR(40),
	fecha_creacion DATE,
	PRIMARY KEY (id_portafolio)
);

INSERT INTO ALINEACION(nom_analista, fecha_creacion) VALUES
('Salazar', '20/05/5'), 
('Antonio', '20/06/5'),  
('Juan', '20/07/5'),  
('Diego', '20/08/5'),
('María', '20/09/5');

CREATE TABLE CRITERIO(
	id_criterio INT AUTO_INCREMENT,
	nombre_criterio VARCHAR(15),
	tipo VARCHAR(15),
	PRIMARY KEY(id_criterio)
);

INSERT INTO CRITERIO(nombre_criterio, tipo) VALUES
('Duracion', 'cuantitativo'), 
('VPN', 'cuantitativo'),  
('PR', 'cuantitativo'),  
('Riesgo', 'cualitativo'),
('Generación de tecnología propietaria', 'cualitativo');

CREATE TABLE PROYECTO(
	id_proyecto INT AUTO_INCREMENT,
	descripcion VARCHAR(100),
	costo INT,
	portafolio INT,
	PRIMARY KEY(id_proyecto),
	FOREIGN KEY(portafolio) REFERENCES ALINEACION(id_portafolio) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO PROYECTO(descripcion, costo, portafolio) VALUES
('Ejemplo de prueba 1: A', 30000, 1), 
('Ejemplo de prueba 1: B', 30000, 1), 
('Ejemplo de prueba 1: C', 10000, 1), 
('Ejemplo de prueba 1: D', 60000, 1),
('Ejemplo de prueba 2', 30000, 2), 
('Ejemplo de prueba 2', 30000, 2), 
('Ejemplo de prueba 3', 10000, 3), 
('Ejemplo de prueba 3', 60000, 3),
('Ejemplo de prueba 4', 30000, 4), 
('Ejemplo de prueba 4', 30000, 4), 
('Ejemplo de prueba 5', 10000, 5), 
('Ejemplo de prueba 5', 60000, 5);

CREATE TABLE PONDERACION(
	portafolio INT,
	criterio INT,
	ponderacion INT,
	PRIMARY KEY(portafolio, criterio),
	FOREIGN KEY(portafolio) REFERENCES ALINEACION(id_portafolio) ON DELETE CASCADE ON UPDATE CASCADE, 
	FOREIGN KEY(criterio) REFERENCES CRITERIO(id_criterio) ON DELETE RESTRICT ON UPDATE RESTRICT
);

INSERT INTO PONDERACION VALUES
(1, 1, 15), 
(1, 2, 30),  
(1, 3, 20),  
(1, 4, 20),
(1, 5, 15),
(2, 1, 20), 
(2, 2, 20),  
(2, 3, 20),  
(2, 4, 20),
(2, 5, 20),
(3, 1, 15), 
(3, 2, 15),  
(3, 3, 20),  
(3, 4, 20),
(3, 5, 30),
(4, 1, 30), 
(4, 2, 30),  
(4, 3, 30),  
(4, 4, 5),
(4, 5, 5),
(5, 1, 22), 
(5, 2, 22),  
(5, 3, 22),  
(5, 4, 12),
(5, 5, 22);

CREATE TABLE VALOR(
	proyecto INT,
	criterio INT,
	valor INT DEFAULT 0,
	PRIMARY KEY(proyecto, criterio),
	FOREIGN KEY(criterio) REFERENCES CRITERIO(id_criterio) ON DELETE RESTRICT ON UPDATE RESTRICT,
	FOREIGN KEY(proyecto) REFERENCES ALINEACION(id_proyecto) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO VALOR VALUES
(1, 1, 24), 
(1, 2, 43000), 
(1, 3, 6), 
(1, 4, 3),
(1, 5, 3),
(2, 1, 11), 
(2, 2, -12000), 
(2, 3, 10), 
(2, 4, 4),
(2, 5, 1),
(3, 1, 8),
(3, 2, -5000), 
(3, 3, 8), 
(3, 4, 2),
(3, 5, 2),
(4, 1, 5), 
(4, 2, 21000), 
(4, 3, 3), 
(4, 4, 1),
(4, 5, 0),
(5, 1, ''), 
(5, 2, ''), 
(5, 3, ''), 
(5, 4, ''),
(5, 5, ''),
(6, 1, ''), 
(6, 2, ''), 
(6, 3, ''), 
(6, 4, ''),
(6, 5, ''),
(7, 1, ''), 
(7, 2, ''), 
(7, 3, ''), 
(7, 4, ''),
(7, 5, ''),
(8, 1, ''), 
(8, 2, ''), 
(8, 3, ''), 
(8, 4, ''),
(8, 5, ''),
(9, 1, ''), 
(9, 2, ''), 
(9, 3, ''), 
(9, 4, ''),
(9, 5, ''),
(10, 1, ''), 
(10, 2, ''), 
(10, 3, ''), 
(10, 4, ''),
(10, 5, ''),
(11, 1, ''), 
(11, 2, ''), 
(11, 3, ''), 
(11, 4, ''),
(11, 5, '');
