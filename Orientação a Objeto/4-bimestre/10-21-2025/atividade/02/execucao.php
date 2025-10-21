<?php

require_once("modelo/Midia.php");
require_once("modelo/Cd.php");
require_once("modelo/Dvd.php");

$midias = array();

$midia;

for ($i = 0; $i < 5; $i++) {

    print(str_pad(($i + 1) . "° Mídia", 40, "-", STR_PAD_BOTH) . "\n");

    print("[ 1 ] - CD\n[ 2 ] - DVD\n[ 3 ] - Outros\n");

    $tipo = readline("Qual é o tipo? ");

    switch ($tipo) {

        case 1:

            $midia = new Cd();
            break;

        case 2:

            $midia = new Dvd();
            break;

        default:
            
            print("Valor inválido!");
            break;

    }

    $descricao = readline("Qual a descrição o produto? ");
    $valorPago = readline("Qual foi o preço gasto? ");

    $midia -> setDescricao($descricao)
           -> setPrecoPago($valorPago);

    $midias[] = $midia;

    print("\n");

}

foreach ($midias as $midia) {

    print($midia . "\n");

}
