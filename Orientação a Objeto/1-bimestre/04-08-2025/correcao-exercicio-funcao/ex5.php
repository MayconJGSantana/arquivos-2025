<?php

function divisaoExata($dividendo, $divisor): bool {

    return ($dividendo % $divisor == 0);

}

function coloca_texto_meio ($string, $tamanho) {

    if ($tamanho % 2 == 1) {

    }
}

$tentativa = 0;

do {

    $tentativa += 1;

    

    $numero = readline("Informe um número: ");

    if ($numero <= 1) {
        break;
    }

    
    // Mostra os divisores do número lido

    if ($numero % 2 == 0) {
        $numero_inicial = ceil($numero / 2);
    }
    else {
        $numero_inicial = $numero / 3;
    }

    for ($i = 1; $i <= $numero_inicial; $i++) {
        
        if (divisaoExata($numero, $i)) {

            print("\t" . "* $i" . "\n");

        }
    }

} while (True);
