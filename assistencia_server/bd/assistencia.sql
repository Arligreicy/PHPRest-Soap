DROP DATABASE IF EXISTS assistencia;

CREATE DATABASE assistencia;

USE assistencia;

CREATE TABLE
  cliente (
    idcliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NULL,
    celular VARCHAR(20) NULL,
    PRIMARY KEY (idcliente)
  );

INSERT INTO
  cliente (nome, celular)
VALUES
  ('João da Silva', '(11) 98765-4321'),
  ('Maria Souza', '(21) 12345-6789'),
  ('Pedro Santos', '(41) 99999-8888'),
  ('Ana Oliveira', '(19) 33333-7777'),
  ('Bruno Pereira', '(31) 55555-6666');

CREATE TABLE
  assistencia (
    idassistencia INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NULL,
    PRIMARY KEY (idassistencia)
  );

INSERT INTO
  assistencia (nome)
VALUES
  ('Assistência XYZ'),
  ('Mega Assistência'),
  ('Super Técnico');

CREATE TABLE
  visita (
    idvisita INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    idcliente INTEGER UNSIGNED NOT NULL,
    idassistencia INTEGER UNSIGNED NOT NULL,
    dataVisita DATE NULL,
    PRIMARY KEY (idvisita),
    INDEX visita_FKIndex1 (idassistencia),
    INDEX visita_FKIndex2 (idcliente),
    FOREIGN KEY (idassistencia) REFERENCES assistencia (idassistencia) ON DELETE NO ACTION ON UPDATE NO ACTION,
    FOREIGN KEY (idcliente) REFERENCES cliente (idcliente) ON DELETE NO ACTION ON UPDATE NO ACTION
  );
  
  INSERT INTO visita (idcliente, idassistencia, dataVisita)
VALUES
    (2, 3, '2024-04-15'),
    (1, 1, '2024-04-20'),
    (5, 2, '2024-04-25');