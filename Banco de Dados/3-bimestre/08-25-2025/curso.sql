create database Curso;
show databases;

create table aluno 
(
	codAluno int primary key,
    nome varchar(40) not null,
    dataNasc date not null,
    cidade varchar(30) not null,
    estado varchar(15) not null
);

create table disciplina
(
	codDisciplina int primary key,
    nomeDisc varchar(20) not null,
    cargaHoraria int not null
);

create table curso
(
	codAluno int not null,
    codDisciplina int not null,
    semestre int not null,
    primary key(codAluno, codDisciplina, semestre),
    foreign key (codAluno) references aluno(codAluno),
    foreign key (codDisciplina) references disciplina(codDisciplina)
);