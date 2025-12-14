CREATE DATABASE comandoSqlII;

USE comandoSqlII;

CREATE TABLE curso (

	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR (40) NOT NULL,
    cargaHoraria INT NOT NULL,
    preco DOUBLE NOT NULL,
    tipo VARCHAR(30) NOT NULL,
    
    PRIMARY KEY (id)

);

INSERT INTO curso (nome, cargaHoraria, preco, tipo) VALUES
('Introdução à Computação', '90', '60.00', 'EAD'),
('Contabilidade II', '25', '99.99', 'EAD'),
('Criando uma Identidade Visual', '25', '120.00', 'EAD'),
('Retórica Avançada', '50', '100.00', 'Presencial'),
('Bootstrap em Aplicações Web', '10.00', '25.00', 'EAD'),
('História da Administração', '25', '60.00', 'EAD'),
('Design de Interiores', '90', '150.00', 'Presencial'),
('Teoria Musical', '50', '300.00', 'Presencial');


SELECT *
FROM curso;

-- Quantidade de cursos dentro de um cache de R$ 80.00
SELECT COUNT(nome)
FROM curso
WHERE preco < '80';


-- Média das cargas horária
SELECT AVG(cargaHoraria)
FROM curso;


-- Soma da carga horária de todos cursos abaixo de R$ 100.00
SELECT SUM(cargaHoraria)
FROM curso
WHERE preco < '100';


-- Nome do curso mais caro e o mais barato
SELECT nome
FROM curso
WHERE preco = (SELECT MAX(preco) FROM curso);

SELECT nome, preco
FROM curso
WHERE preco = (SELECT MIN(preco) FROM curso);


-- Cursos com id ímpar
SELECT id, nome
FROM curso
WHERE id % 2 = 1;


-- Tipos de cursos
SELECT tipo
FROM curso
GROUP BY tipo;