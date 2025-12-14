CREATE DATABASE atividadeFullJoin;

USE atividadeFullJoin;

CREATE TABLE Departamento (

	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
    
    PRIMARY KEY (id)

);

INSERT INTO Departamento (nome) VALUES 
('TI'),
('Contabilidade'),
('Venda');



CREATE TABLE Funcionario (

	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
    sobrenome VARCHAR(30) NOT NULL,
    PRIMARY KEY (id),
    
    idDepartamento INT NOT NULL,
    FOREIGN KEY (idDepartamento) REFERENCES Departamento (id)

);


INSERT INTO Funcionario (nome, sobrenome, idDepartamento) VALUES
('Givaldo', 'Oliveira', '2'),
('Jefferson', 'Chaves', '1'),
('Ana Carla', 'Arruda', '1'),
('Daniel', 'Di Domenico', '2'),
('Leonir', 'Colombo', '3');




SELECT *
FROM Departamento
FULL JOIN Funcionario
ON Departamento.id = Funcionario.idDepartamento;

