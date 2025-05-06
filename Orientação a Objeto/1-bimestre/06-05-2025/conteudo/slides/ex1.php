<?php

//Declarar a classe Pessoa (atributos e métodos
class Pessoa {
    //Atributos
    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    //Métodos
    function falarOi() {
        echo "Olá mundo, sou " . $this->nome . "!\n";
    }

    function falarEndereco() {

    }

    function falarAltura() {
        
    }
}


//Programa principal
//1- Criar o objeto e ler os dados para os atributos

//2- Chamar os métodos