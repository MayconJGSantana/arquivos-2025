CREATE DATABASE IF NOT EXISTS hospital;

USE hospital;

CREATE TABLE IF NOT EXISTS medico(
	Nome char not null,
    CRM int primary key
);

describe medico;

DROP TABLE medico;

create table medico (
	CodMed int primary key,
	NomeMed varchar(41) not null,
    DataNasc date not null,
    CPF varchar(41) not null,
    Cidade varchar(41) not null,
    Especialidade varchar(41) not null
);
insert into medico values(1, 'Joao', '1914-12-12', '34', 'floripa', 'Veterinario');
insert into medico values(2, 'Maria', '1915-12-12', '33', 'foz', 'Ortopedista');
INSERT INTO medico VALUES (3, 'João', '1980-05-23', '45', 'curitiba', 'Neurologista');
INSERT INTO medico VALUES (4, 'Ana', '1992-11-08', '31', 'londrina', 'Pediatria');
INSERT INTO medico VALUES (5, 'Carlos', '1975-03-15', '50', 'maringá', 'fish');
INSERT INTO medico VALUES (6, 'Beatriz', '1988-07-30', '37', 'foz', 'horses');
insert into medico values (7, 'gabriel', '2000-12-01', '7','Curitiba','Otorrinolaringologista');
INSERT INTO medico VALUES (8, 'henrique', '2020-12-01', '8','cascavel','pigs');

select * from medico;

create table paciente (
	CodPac int primary key,
	NomePac varchar(41) not null,
    DataNasc date not null,
    CPF varchar(41) not null,
    Cidade varchar(41) not null
);

insert into paciente values 
('1', 'Ana', '1978-09-13', '22010005000', 'florianopolis'),
('2', 'Paulo', '1940-03-17', '81101000400', 'porto velho'),
('3', 'Lucia', '1957-06-24', '179101000000', 'blumenau'),
('4', 'Carlos', '2001-10-08', '125101000000', 'joinville'),
('5', 'Luiz', '2000-08-14', '14780111400', 'fortaleza'),
('6', 'Mauricio', '1980-01-01', '47855499635', 'rio branco');

create table consulta (
	CodMed int,
    CodPac int,
    dataCons date,
    hora time,
    primary key(CodMed, CodPac, hora, dataCons),
    foreign key (CodMed) references medico(CodMed),
    foreign key (CodPac) references paciente(CodPac)
);

insert into consulta values
(1, 1, '2025-05-12', '4:00'),
(1, 4, '2024-05-15', '12:00'),
(2, 1, '2025-03-12', '16:00'),
(1, 1, '2025-05-12', '14:00'),
(2, 2, '2025-08-11', '08:00'),
(2, 3, '2025-05-11', '9:00');

update medico
set Especialidade = 'Dermatologia'
where CodMed = 2;

select * from medico;

delete from medico
where CodMed = 7;

INSERT INTO paciente VALUES (10, 'Gabriel', '1941-12-24', '12345678912', 'Jaene');



DESCRIBE paciente;

SELECT * FROM medico;

UPDATE medico
SET especialidade = null
WHERE CodMed = 2; 

-- UPDATE medico
-- SET especialidade = 'Cardiologia'
-- WHERE CodMed = 'Maria'; 
-- Esse não funciona por segurança, se tivessem 10 Marias, todas iriam passar a ter especialidade Cardiologia

-- DELETE 
-- Deleta toda a linha, todo os valores existente em um campo

UPDATE medico
SET nomeMed = 'Maria', cidade = 'Foz do Iguaçu', Especialidade = 'Ortopedista'
WHERE codMed = 2;


INSERT INTO 