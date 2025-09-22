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
    primeiroNome VARCHAR(25) NOT NULL,
    segundoNome VARCHAR(25) NOT NULL,
    ultimoNome VARCHAR (25) NOT NULL,
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

INSERT INTO funcionario
VALUES
(1, 'João', 'Carlos', 'Silva', '1985-04-15', '12345678901', 'MG1234567', 'Rua das Flores, 123', '12345000', 'São Paulo', '(11) 98765-4321', 1, 'Analista', 3500.00),
(2, 'Maria', 'Fernanda', 'Oliveira', '1990-08-22', '23456789012', 'SP2345678', 'Avenida Brasil, 456', '23456000', 'Rio de Janeiro', '(21) 91234-5678', 2, 'Gerente', 5500.00),
(3, 'Carlos', 'Eduardo', 'Pereira', '1978-11-10', '34567890123', 'RJ3456789', 'Praça da Sé, 789', '34567000', 'Belo Horizonte', '(31) 92345-6789', 3, 'Coordenador', 4500.00),
(4, 'Ana', 'Beatriz', 'Costa', '1995-05-18', '45678901234', 'MG4567890', 'Rua XV de Novembro, 101', '45668000', 'Curitiba', '(41) 93456-7890', 1, 'Assistente', 3000.00),
(5, 'Felipe', 'Augusto', 'Martins', '1982-12-30', '56789012345', 'SP5678901', 'Rua do Comércio, 202', '56789000', 'Porto Alegre', '(51) 93456-8901', 2, 'Diretor', 7000.00),
(6, 'Juliana', 'Silva', 'Santos', '1992-03-25', '67890123456', 'PR6789012', 'Avenida Rio Branco, 303', '67890000', 'Salvador', '(71) 94321-0987', 3, 'Analista', 3200.00),
(7, 'Rafael', 'Alves', 'Sousa', '1987-09-12', '78901234567', 'SP7890123', 'Rua Santa Teresa, 404', '78901000', 'Fortaleza', '(85) 92134-5678', 1, 'Técnico', 2800.00),
(8, 'Patricia', 'Maria', 'Lima', '1994-06-08', '89012345678', 'MG8901234', 'Rua São João, 505', '89001000', 'Brasília', '(61) 93123-4567', 2, 'Supervisor', 4800.00),
(9, 'Roberto', 'Silveira', 'Gomes', '1983-07-14', '90123456789', 'RJ9012345', 'Avenida Atlântica, 606', '90123000', 'Recife', '(81) 92123-6789', 3, 'Consultor', 4000.00),
(10, 'Larissa', 'Carolina', 'Oliveira', '1996-02-17', '01234567890', 'SP0123456', 'Rua das Acácias, 707', '01234000', 'Manaus', '(92) 93000-1234', 1, 'Estagiária', 1800.00);


-- ALTER TABLE departamento DROP FOREIGN KEY codigoFuncionarioGerente;


INSERT INTO departamento 
VALUES 
(1, 'TI', 'Bloco A, 2º andar', 1),
(2, 'Recursos Humanos', 'Bloco B, 1º andar', 2),
(3, 'Financeiro', 'Bloco C, 3º andar', 3),
(4, 'Marketing', 'Bloco D, 4º andar', 4);

-- ALTER TABLE departamento ADD CONSTRAINT codigoFuncionarioGerente FOREIGN KEY (codigoFuncionarioGerente) REFERENCES funcionario(codigoFuncionario);


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
ORDER BY dataNascimento;


-- e)

SELECT ultimoNome, primeiroNome, telefone
FROM funcionario
ORDER BY ultimoNome, primeiroNome;


-- f)

SELECT sum(salario)
FROM funcionario;


-- g)

SELECT primeiroNome, funcao, DEPARTAMENTO.nome
FROM funcionario, departamento
WHERE FUNCIONARIO.codigoDepartamento = DEPARTAMENTO.codigoDepartamento;


-- h)

SELECT nome, FUNCIONARIO.codigoFuncionarioGerente
FROM departamento
WHERE DEPARTAMENTO.codigoFuncionarioGerente = FUNCIONARIO.codigoFuncionario;


-- i)

SELECT sum(FUNCIONARIO.salario)
FROM departamento
WHERE codigo;


-- j)

SELECT *
FROM funcionario
WHERE funcao = 'Supervisor';


-- k)

SELECT count(*)
FROM funcionario;


-- l)

SELECT sum(salario) / (SELECT COUNT(*) FROM departamento)
FROM funcionario;


-- m)

SELECT primeiroNome, segundoNome, ultimoNome
FROM funcionario

