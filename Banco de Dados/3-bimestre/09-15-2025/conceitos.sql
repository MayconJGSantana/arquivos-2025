USE hospital;

DESCRIBE medico;


-- Consultas básicas

	-- 1.
    
SELECT NomeMed, DataNasc
FROM medico;

	-- 2.
    
SELECT NomeMed, Cdade
FROM medico;

	-- 3.
    
SELECT nomeMed, especialidade
FROM medico;

	-- Adições
    
SELECT nomeMed AS nome, especialidade Especialidades -- Após um campo a ser selecionado, vem um nome de apresentação ao usuário, podendo ser expressado também usando o "AS"
FROM medico;

SELECT codMed, nomeMed AS Nome
FROM medico
WHERE Especialidade = "Otorrinolaringologista";

SELECT COUNT(*)
FROM medico
WHERE Especialidade = "Otorrinolaringologista"; -- Retorna a quantidade de consultas

SELECT nomeMed AS Nome
FROM medico
WHERE cpf IS NOT NULL; -- Retorna caso o cpf não seja nulo

SELECT nomeMed AS Nome
FROM medico
WHERE cpf IS NULL; -- Retorna caso o cpf seja nulo

SELECT nomeMed as Nome
FROM medico
WHERE nomeMed LIKE 'M%';

SELECT nomeMed
FROM medico
WHERE nomeMed LIKE 'M%' AND especialidade = 'Neurologista';

SELECT nomeMed AS Nome
FROM medico
WHERE nomeMed LIKE '%N%';

SELECT nomeMed
FROM consulta, medico, paciente
WHERE nomePac = 'Ana' AND medico.codMed = consulta.codMed AND paciente.codPac = consulta.codPac;

SELECT nomePac
FROM paciente, consulta
WHERE paciente.codPac = consulta.codPac AND dataCons = '2025-02-11';

SELECT nomePac
FROM paciente
WHERE codPac NOT IN (SELECT codPac
					 FROM consulta); -- Condições aninhadas
                     
SELECT DISTINCT paciente.codPac, nomePac AS Paciente
FROM paciente, consulta
WHERE paciente.codPac = consulta.codPac; -- Retorna os pacientes sem código repetidos nas consultas

SELECT *
FROM paciente
ORDER BY nomePac;

-- Testes

SELECT *
FROM paciente;

UPDATE medico
SET nomeMed = "Maria", cidade = "Foz do Iguaçu", Especialidade = "Ortopedista"
WHERE codMed = 2;

