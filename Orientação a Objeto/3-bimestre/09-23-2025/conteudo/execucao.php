<?php

require_once("model/Aluno.php");
require_once("model/Professor.php");

$aluno = new Aluno;
$aluno -> setNome("Tristão")
       -> setIdade(00)
       -> setRG(3802173)
       -> setMatricula("ADSAIO132");

$professor = new Professor;
$professor -> setNome("Tristona")
       -> setIdade(-1)
       -> setRG(635623)
       -> setSalario(23123.12);

print_r($aluno);
print_r($professor);