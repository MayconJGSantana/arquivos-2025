CREATE DATABASE EmpresaRevisao;

USE EmpresaRevisao;

CREATE TABLE departamento (
	codigoDepartamento INT PRIMARY KEY,
    nomeDepartamento VARCHAR(40) NOT NULL,
    localizacao VARCHAR(60) NOT NULL,
    codigoFuncionarioGerente INT NOT NULL
);

CREATE TABLE funcionario (
	codigoFuncionario INT PRIMARY KEY,
    primeiroNome VARCHAR(25),
    segundoNome VARCHAR(25),
    ultimoNome VARCHAR (25),
    dataNascimento DATE NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    rg VARCHAR(20) NOT NULL,
    endereco VARCHAR(40) NOT NULL,
    cep VARCHAR(11) NOT NULL,
    cidade VARCHAR(20) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    codigoDepartamento INT NOT NULL,
    FOREIGN KEY (codigoDepartamento) REFERENCES departamento(codigoDepartamento),
    funcao VARCHAR(20) NOT NULL,
    salario DOUBLE NOT NULL
);

INSERT INTO departamento 
VALUES 
(1, 'TI', 'Bloco A', 1),
(2, 'RH', 'Bloco B', 2),
(3, 'Financeiro', 'Bloco C', 3),
(4, 'Marketing', 'Bloco D', 7);

INSERT INTO funcionario
VALUES
(1, 'João', 'Carlos', 'Silva', '1985-04-15', '12345678901', 'MG1234567', 'Rua A', '11111111', 'São Paulo', '1111-1111', 1, 'Gerente', 6000.00),
(2, 'Maria', 'Fernanda', 'Oliveira', '1990-08-22', '23456789012', 'SP2345678', 'Rua B', '22222222', 'Curitiba', '2222-2222', 2, 'Supervisor', 4500.00),
(3, 'Carlos', NULL, 'Pereira', '1978-11-10', '34567890123', 'RJ3456789', 'Rua C', '33333333', 'Recife', '3333-3333', 3, 'Telefonista', 2200.00),
(4, 'Ana', 'Beatriz', 'Costa', '1995-05-18', '45678901234', 'MG4567890', 'Rua D', '44444444', 'Recife', '4444-4444', 1, 'Analista', 3500.00),
(5, 'Felipe', NULL, 'Martins', '1982-12-30', '56789012345', 'SP5678901', 'Rua E', '55555555', 'Porto Alegre', '5555-5555', 2, 'Gerente', 5000.00),
(6, 'Juliana', 'Silva', 'Santos', '1992-03-25', '67890123456', 'PR6789012', 'Rua F', '66666666', 'São Paulo', '6666-6666', 3, 'Técnico', 2800.00),
(7, 'Patricia', 'Maria', 'Lima', '1994-06-08', '89012345678', 'MG8901234', 'Rua G', '77777777', 'Belo Horizonte', '7777-7777', 4, 'Gerente', 5200.00),
(8, 'Roberto', 'Silveira', 'Gomes', '1983-07-14', '90123456789', 'RJ9012345', 'Rua H', '88888888', 'Manaus', '8888-8888', 4, 'Consultor', 4100.00);

ALTER TABLE departamento ADD CONSTRAINT codigoFuncionarioGerente FOREIGN KEY (codigoFuncionarioGerente) REFERENCES funcionario(codigoFuncionario);


-- a)

SELECT primeiroNome, segundoNome, ultimoNome
FROM funcionario
ORDER BY ultimoNome;


-- b)

SELECT *
FROM funcionario
ORDER BY cidade;


-- c)

SELECT *
FROM funcionario
WHERE salario > 1000.00
ORDER BY primeiroNome, segundoNome, ultimoNome;


-- d)

SELECT dataNascimento, primeiroNome
FROM funcionario
ORDER BY dataNascimento DESC;


-- e)

SELECT ultimoNome, primeiroNome, telefone
FROM funcionario
ORDER BY ultimoNome, primeiroNome;


-- f)

SELECT SUM(salario)
FROM funcionario;


-- g)

SELECT funcionario.primeiroNome, funcionario.funcao, departamento.nomeDepartamento
FROM funcionario, departamento
WHERE funcionario.codigoDepartamento = departamento.codigoDepartamento;


-- h)

SELECT nomeDepartamento, funcionario.primeiroNome as primeiroNomeGerente, funcionario.ultimoNome as SobrenomeGerente
FROM departamento, funcionario
WHERE departamento.codigoFuncionarioGerente = funcionario.codigoFuncionario;


-- i)

SELECT SUM(funcionario.salario), nomeDepartamento
FROM departamento, funcionario
WHERE departamento.codigoDepartamento = funcionario.codigoDepartamento
GROUP BY departamento.nomeDepartamento;


-- j)

SELECT primeiroNome, segundoNome, ultimoNome, funcao, departamento.nomeDepartamento
FROM funcionario, departamento
WHERE funcionario.funcao = 'Supervisor' AND funcionario.codigoDepartamento = departamento.codigoDepartamento;


-- k)

SELECT count(*)
FROM funcionario;


-- l)

SELECT sum(salario) / (SELECT COUNT(*) FROM funcionario)
FROM funcionario;


-- m)

SELECT primeiroNome, segundoNome, ultimoNome
FROM funcionario
WHERE cidade = 'Recife' AND funcao = 'Telefonista';


-- n)

SELECT nomeDepartamento, funcionario.primeiroNome, funcionario.segundoNome, funcionario.ultimoNome
FROM departamento, funcionario
ORDER BY nomeDepartamento, funcionario.primeiroNome, funcionario.segundoNome, funcionario.ultimoNome;


-- o)

SELECT primeiroNome, ultimoNome
FROM funcionario
WHERE segundoNome IS NULL OR segundoNome = "";


-- p)

SELECT MIN(funcionario.salario), nomeDepartamento
FROM departamento, funcionario
WHERE departamento.codigoDepartamento = funcionario.codigoDepartamento
GROUP BY departamento.nomeDepartamento;
