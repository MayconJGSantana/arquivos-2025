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
('Notebook', '3000', '1'),
('Smartphone', '150', '2'),
('Mouse', '50', '1'),
('Teclado', '80', '3');


-- Exercício 1

SELECT cliente.nome as cliente, pedido.nome as produto, pedido.valor as valorProduto
FROM pedido
INNER JOIN cliente
ON pedido.idCliente = cliente.id;


-- Exercício 2

SELECT cliente.nome as cliente, pedido.nome as produto, pedido.valor as valorProduto
FROM cliente
INNER JOIN pedido
ON pedido.idCliente = cliente.id
WHERE pedido.valor > '1000';
