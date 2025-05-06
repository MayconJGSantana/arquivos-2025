<?php


// Funções

function fatorial ($numero) {

    $fatorial = $numero;
    
    for ($i = $numero - 1; $i > 1; $i--) {

        $fatorial *= $i;

    }

    return $fatorial;

}



// Programa principal

do {
    $numero = readline("Entre com um número, se for zero, o programa terminará: ");
    
    if ($numero <=  0) {
        break;
    }

    print(fatorial($numero) . "\n");
} while (true);