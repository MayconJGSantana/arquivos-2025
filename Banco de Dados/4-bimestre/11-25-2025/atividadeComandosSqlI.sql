CREATE DATABASE comandoSqlI;

USE comandoSqlI;

CREATE TABLE venda (

	`id` INT NOT NULL AUTO_INCREMENT,
    `vendedor` VARCHAR(40) NOT NULL,
    `produto` VARCHAR(40) NOT NULL,
    `quantidade` INT NOT NULL,
    `data` DATE NOT NULL,
    
    PRIMARY KEY (id)

);

INSERT INTO venda (`vendedor`, `produto`, `quantidade`, `data`) VALUES
('Ana', 'Mouse', '3', '2024-01-10'),
('João', 'Teclado', '2', '2024-01-10'),
('Ana', 'Monitor', '1', '2024-01-12'),
('Carlos', 'Mouse', '4', '2024-01-12'),
('João', 'Mouse', '10', '2024-01-13'),
('Ana', 'Teclado', '2', '2024-01-13');


-- Vendedores com mais produtos vendido que Ana no dia 10/01
SELECT vendedor
FROM venda
WHERE `data` = '2024-01-10' AND quantidade > (SELECT quantidade
											  FROM venda
											  WHERE `data` = '2024-01-10' AND vendedor = 'Ana');


-- Lista de todas venda ordenadas por quantidade
SELECT *
FROM venda
ORDER BY quantidade;


-- Vendas com mais quantidade que as do teclado
SELECT produto
FROM venda
WHERE quantidade > ALL (SELECT quantidade
					FROM venda 
					WHERE produto = 'Teclado')
GROUP BY produto;