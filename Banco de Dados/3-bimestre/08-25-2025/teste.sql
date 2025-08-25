USE clinica;

CREATE TABLE IF NOT EXISTS teste (

	codTeste INT PRIMARY KEY

);

SHOW TABLES FROM clinica;

DESCRIBE aluno;

ALTER TABLE teste ADD soteste VARCHAR(40) NOT NULL;

SHOW COLUMNS FROM teste;

SHOW COLUMNS FROM teste;
DESCRIBE teste;

ALTER TABLE teste DROP soteste;

SHOW COLUMNS FROM teste;
DESCRIBE teste;

ALTER TABLE teste ADD sotestes2 INT NOT NULL;

DESCRIBE teste;
SHOW COLUMNS FROM teste;

ALTER TABLE teste MODIFY sotestes2 VARCHAR(40);

ALTER TABLE teste CHANGE sotestes2 sotestes3 CHAR(40);

DROP TABLE aluno;

-- Criando um Database para testar o comando

CREATE DATABASE Curso;
DROP DATABASE Curso;


-- 

CREATE DATABASE Aula;

USE Aula;

CREATE TABLE aluno (

	codAluno INT PRIMARY KEY
    
);

CREATE TABLE Disciplina (

	codDisciplina INT PRIMARY KEY
    
);

CREATE TABLE Estuda (

	PRIMARY KEY

);
