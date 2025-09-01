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

/*
INSERT INTO medico VALUES 
	(1, 'João', '1984-06-28', '10000100000', 'Florianopolis', 'Ortopedia'),
     (2, 'Maria', '1970-07-13', '11100100000', 'Blumenau', 'Traumatologia'),
     (3, 'Pedro', '1956-11-25', '10001101000', 'Porto Velho', 'Pediatria'),
     (4, 'Carlos', '1985-02-07', '11110100000', 'Joinville', 'Ortopedia'),
     (5, 'Marcia', '1945-08-15', '1011010000', 'Fortaleza', 'Neurologia'),
     (6, 'Luciana', '1975-04-25', '01001011111', 'Rio Branco', 'Oftmalogia'); */
     
CREATE TABLE IF NOT EXISTS paciente
(
    codPac INT PRIMARY KEY,
    nomePac VARCHAR(40) NOT NULL,
    dataNasc DATE NOT NULL,
    cpf CHAR(11) UNIQUE,
    cidade VARCHAR(30) NOT NULL
);

/*
INSERT INTO paciente VALUES (1, 'Ana', '1978-09-13', '2201005000', 'Florianópolis');

INSERT INTO paciente VALUES (2, 'Paulo', '1940-03-17', '81101000400', 'Porto Velho');

INSERT INTO paciente VALUES (3, 'Lucia', '1957-06-24', '17910100000' , 'Blumenau');

INSERT INTO paciente VALUES (4, 'Carlos', '2001-10-08', '12510100000' , 'Joinville');

INSERT INTO paciente VALUES (5, 'Luiz', '2000-08-14', '14780111400' , 'Fortaleza');

INSERT INTO paciente VALUES (6, 'Mauricio', '1980-01-01', '47855499635' , 'Rio Branco'); */

CREATE TABLE IF NOT EXISTS consulta (
    codMed INT NOT NULL,
    codPac INT NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    PRIMARY KEY (codMed, codPac, data, hora),
    FOREIGN KEY (codMed) REFERENCES medico(codMed),
    FOREIGN KEY (codPac) REFERENCES paciente(codPac)
);


/*
INSERT INTO consulta VALUES (1, 1, '2025-05-12', '14:00');

INSERT INTO consulta VALUES (1, 4, '2025-05-13','10:00');
INSERT INTO consulta VALUES (2, 1, '2025-10-13', '9:00');
INSERT INTO consulta VALUES (2, 2, '2025-03-13', '11:00');
INSERT INTO consulta VALUES (2, 3, '2025-08-14', '14:00');
INSERT INTO consulta VALUES (2, 4, '2024-08-14', '17:00');
INSERT INTO consulta VALUES (3, 6, '2024-05-19', '18:00');
INSERT INTO consulta VALUES (3, 3, '2025-04-12', '10:00');
INSERT INTO consulta VALUES (5, 4, '2025-04-19', '13:00');
INSERT INTO consulta VALUES (6, 5, '2025-04-20', '13:00');
INSERT INTO consulta VALUES (4, 4, '2024-10-22', '19:30'); */

DESCRIBE medico;
DESCRIBE paciente;
DESCRIBE consulta;

SELECT * FROM medico;
SELECT * FROM paciente;
SELECT * FROM consulta;

UPDATE medico
SET especialidade = 'Dermatologia'
WHERE codMed = 3;

INSERT INTO paciente VALUES (7, 'Teste', '2504-03-25', '96521559179', 'Foz do Iguaçu');

ON DELETE CASCADE FROM paciente
WHERE codPac = 3;
