<?php

class Monitor {
    //Atributos
    public $tamanho;
    public $cor;
    public $preco;

    //Métodos
    function exibirImagem() {
        echo "Monitor exibindo imagem no tamanho " . $this->tamanho . "\n";
    }

    function ligar() {
        echo "Monitor ligado\n";
    }

    function desligar() {
        echo "Monitor desligado\n";
    }
}

//Programa principal - iniciará a execução nesta linha
$monitorLab = new Monitor();
$monitorLab->tamanho = 21;
$monitorLab->cor = "Preto";
$monitorLab->preco = 500;
$monitorLab->ligar();
$monitorLab->exibirImagem();
$monitorLab->desligar();
echo "Dados do monitor: \n";
echo "Tamanho: " . $monitorLab->tamanho . "\n";
echo "Cor: " . $monitorLab->cor . "\n";
echo "Preço: " . $monitorLab->preco . "\n";
//print_r($monitorLab);

//Outro objeto monitor
$monitorMurilo = new Monitor();
$monitorMurilo->tamanho = 14;
$monitorMurilo->cor = "Cinza";
$monitorMurilo->preco = 1000;
$monitorMurilo->ligar();
$monitorMurilo->exibirImagem();
$monitorMurilo->desligar();
echo "Dados do monitor: \n";
echo "Tamanho: " . $monitorMurilo->tamanho . "\n";
echo "Cor: " . $monitorMurilo->cor . "\n";
echo "Preço: " . $monitorMurilo->preco . "\n";