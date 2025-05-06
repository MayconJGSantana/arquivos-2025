<?php

class Monitor { // Por padrão, a primeira letra do nome da classe precisa ser maiúscula
    // Atributo

    public $tamanho;
    public $cor;
    public $preco;

    // Métodos | Operações executadas pelo objeto, declarado como uma função, mas não é uma função
    
    function exibir_imagem() {

        print ("Monitor exibindo imagem no tamanho " . $this -> tamanho . "\n");

    }

    function ligar() {

        print ("Monitor ligado\n");

    }

    function desligar() {

        print ("Monitor desligado\n");

    }

}



// Programa principal

$monitor_lab = new Monitor();


    // Atributos
$monitor_lab ->
             tamanho = 21;
$monitor_lab ->
             cor = "Preto";
$monitor_lab ->
             preco = 500;


    // Métodos
$monitor_lab ->
             ligar();
$monitor_lab ->
             exibir_imagem();
$monitor_lab ->
             desligar();
             

echo "Dados do monitor: \n";

echo "Tamanho: " . $monitor_lab -> tamanho . "\n";
echo "Cor: " . $monitor_lab -> cor . "\n";
echo "Preço: " . $monitor_lab -> preco . "\n";

// print_r($monitor_lab);


// Outro objeto monitor

$monitor_secundario = new Monitor ();

    // Atributos
    $monitor_secundario ->
                           tamanho = 19;
    $monitor_secundario ->
                           cor = "branco";
    $monitor_secundario ->
                           preco = 1000.00;
    
    // Métodos
    $monitor_secundario ->
                           ligar();
    $monitor_secundario ->
                           exibir_imagem();
    $monitor_secundario ->
                           desligar();