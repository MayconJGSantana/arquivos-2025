CREATE DATABASE IF NOT EXISTS clinica;

USE clinica;

CREATE TABLE IF NOT EXISTS medico
(
    codMed INT PRIMARY KEY,
    nomeMed VARCHAR(40) NOT NULL,
    dataNasc DATE NOT NULL,
    cpf CHAR(11),
    cidade VARCHAR(30) NOT NULL,
    especialidade VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS paciente
(
    codPac INT PRIMARY KEY,
    nomePac VARCHAR(40) NOT NULL,
    dataNasc DATE NOT NULL,
    cpf CHAR(11) UNIQUE,
    cidade VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS consulta (
    codMed INT NOT NULL,
    codPac INT NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    PRIMARY KEY (codMed, codPac, data, hora),
    FOREIGN KEY (codMed) REFERENCES medico(codMed),
    FOREIGN KEY (codPac) REFERENCES paciente(codPac)
);

DESCRIBE medico;
DESCRIBE paciente;
DESCRIBE consulta;

ALTER TABLE medico ADD crm INT NOT NULL;

DESCRIBE medico;

ALTER TABLE medico DROP crm;
