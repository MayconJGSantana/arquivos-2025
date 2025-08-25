CREATE DATABASE Empresa;

USE Empresa;

CREATE TABLE  Funcionario (

	codFuncionario INT PRIMARY KEY,
    nome VARCHAR(40) NOT NULL,
    dataAdmissao DATE NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    endereco VARCHAR(40) NOT NULL

);

CREATE TABLE Projeto (

	codProjeto INT PRIMARY KEY,
    nome VARCHAR(40) NOT NULL,
    prazo DATE NOT NULL

);

CREATE TABLE Atua (

	codFuncionario INT NOT NULL,
    codProjeto INT NOT NULL,
    dataIngresso DATE NOT NULL,
    PRIMARY KEY (codFuncionario, codProjeto, dataIngresso),
    FOREIGN KEY (codFuncionario) REFERENCES Funcionario(codFuncionario),
    FOREIGN KEY (codProjeto) REFERENCES Projeto(codProjeto)

);