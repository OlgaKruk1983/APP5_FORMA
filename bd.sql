CREATE DATABASE text;
USE text;
CREATE TABLE evaluacion(
    nombre varchar(30),
    pregunta1 varchar(400),
    pregunta2 varchar(400),
    pregunta3 varchar(400),
    pregunta4 varchar(600)
);

ALTER Table evaluacion ADD pregunta5 VARCHAR(600);