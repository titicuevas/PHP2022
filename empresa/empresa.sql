DROP TABLE  IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
    id              bigserial PRIMARY KEY,
    codigo          numeric(2) NOT NULL UNIQUE,
    denominacion    varchar (255) NOT NULL



);


-----Fixtires:


INSERT INTO departamentos (codigo, denominacion)

    VALUES (10, 'Informatica'),
           (20, 'Administrativo'),
           (30, 'Prevencion'),
           (40, 'Laboratorio') 
