CREATE DATABASE bigMonkeyGames;

USE bigMonkeyGames;

CREATE TABLE cargo (

	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
    
);

CREATE TABLE funcionario (

	id INT NOT NULL  AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    sobrenome VARCHAR(20) NOT NULL,
    PRIMARY KEY (id),
    
    idCargo INT,
    FOREIGN KEY (idCargo) REFERENCES cargo (id)
    
);

INSERT INTO cargo (nome) VALUES
('Analista de Sistemas'),
('Gerente de Projetos'),
('CEO');

INSERT INTO funcionario (nome, sobrenome, idCargo) VALUES
('Gabriel', 'Augusto', '2'),
('Isabela', 'Parolin', '3'),
('Melissa', 'Silveira', '1'),
('Rafael', 'Camargo', NULL),
('Théo', 'Tannouri', NULL);


-- Exercício 1

SELECT funcionario.nome as nome, funcionario.sobrenome as sobrenome, cargo.nome
FROM funcionario
LEFT JOIN cargo
ON funcionario.idCargo = cargo.id;
