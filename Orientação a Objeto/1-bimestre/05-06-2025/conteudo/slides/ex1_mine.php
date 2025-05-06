<?php

class Pessoa {

    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;


    function falar_ola() {
        print ("Olá mundo, sou " . $this -> nome . "!\n");
    }

    function falar_endereco() {
        print ("Moro em " . $this -> endereco . ", " . $this -> cidade . "/" . $this -> uf . "!\n");
    }

    function falar_altura() {
        print ("Tenho " . $this -> altura . " metros!\n");
    }

}



// Programa inicial

$pessoa = new Pessoa();

$pessoa -> nome = readline("Qual seu nome? ");
$pessoa -> endereco = readline("Qual seu endereço? ");
$pessoa -> cidade = readline("Qual sua cidade? ");
$pessoa -> uf = readline("Qual seu UF? ");
$pessoa -> altura = readline("Qual sua altura? ");

$pessoa -> falar_ola();
$pessoa -> falar_endereco();
$pessoa -> falar_altura();