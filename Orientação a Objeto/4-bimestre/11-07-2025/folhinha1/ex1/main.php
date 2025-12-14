<?php

require_once("model/Sum.php");
require_once("model/Subtract.php");
require_once("model/Division.php");
require_once("model/Remainder.php");
require_once("model/Multiplication.php");

$options = ["Soma", "Subtração", "Multiplicação", "Divisão", "Resto"];

while (true) {

    $choice = readline("Qual sua escolha?  ");

    if ($choice < 0 || $choice > count($options)) {

        print("Valor inválido!");

    }
    else {

        break;

    }

}

$operation = null;

switch ($choice) {

    case 1:

        $operation = new Sum();

        break;

    case 2:

        $operation = new Subtract();

        break;

    case 3:

        $operation = new Multiplication();

        break;

    case 4:

        $operation = new Division();

        break;

    case 5:

        $operation = new Remainder();

        break;

}

while (true) {


    $numA = readline("Qual o primeiro número? ");

    $numB = readline("Qual o segundo número? ");

    if ($numA == 0 && $numB == 0) {

        exit();

    }

    $operation -> setNumA($numA)
               -> setNumB($numB);

    print($operation . "\n");


    sleep(2);


}