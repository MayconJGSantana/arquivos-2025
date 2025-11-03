CREATE DATABASE atividadeInnerJoin;

USE atividadeInnerJoin;

CREATE TABLE cliente (

	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
    
);

INSERT INTO cliente (nome) VALUES
('João Silva'),
('Maria Souza'),
('Pedro Santos');

CREATE TABLE pedido (

	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
	valor DECIMAL (6, 2) NOT NULL,
    PRIMARY KEY(id),
    
    idCliente INT NOT NULL,
	FOREIGN KEY (idCliente) REFERENCES cliente (id)
    
);

INSERT INTO pedido (nome, valor, idCliente) VALUES
('notebook', '3000', '1'),
('smartphone', '150', '2'),
('mouse', '50', '1');


-- Exercício 1

SELECT  *
FROM pedido
INNER JOIN cliente
ON pedido.idCliente = cliente.id;


-- Exercício 2

SELECT cliente.nome as cliente, pedido.nome as produto, pedido.valor as valorProduto
FROM cliente
INNER JOIN pedido
ON pedido.idCliente = cliente.id
WHERE pedido.valor > '1000';

https://prod.liveshare.vsengsaas.visualstudio.com/join?63A8BCDB0DCF8D507BC3BD2BFECA2BF34CEA
