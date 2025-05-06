<?php

function numeroPrimo($numero) {

    $quantidade_divisores = 0;

    // Verifica se o número é par o ímpar, a fim de limitar de onde começa o laço

    if ($numero % 2 == 0) {
        $numero_inicial = ceil($numero / 2);
    }
    else {
        $numero_inicial = ceil($numero / 3);
    }



    // Verificação de divisores de um número

    for ($i = 2; $i <= $numero_inicial; $i++) {
        
        if ($numero % $i == 0) {

            return false;

        }

    }

    return true;

}


while (True) {

    $numero = readline("Informe um número: ");

    if ($numero < 2) {
        break;
    }

    if (numeroPrimo($numero)) {
        print("\t" . "O número " . "\033[32m" . "é primo". "\033[m" . "!". "\n" . "\n");
    }
    else {
        print("\t" . "O número " . "\033[31m" . "não é primo" . "\033[m" . "!" . "\n" . "\n");
    }

}

