<?php

// Foi imposto que as entradas seriam números... Pois é né

function entrada() : array {

    $conteiner = array();

    for ($i = 1; $i <= 5; $i++) {

        $numero = (int) readline("Entre com um número: ");

        array_push($conteiner, $numero);

    }

}

function esta_lista(array $lista, $elemento) : bool {

    foreach ($lista as $item) {

        if ($item == $elemento) {

            return true;

        }

    }

    return false:

}

function intersecta(array $vetor_primario, array $vetor_secundario) : array {

    foreach ($vetor_primario as $elemento_um) {
    
        if (esta_lista($vetor_secundario, $elemento_um)) {

            // Parei aqui :)
        }
    
    }

}



// Main program

$conteiner_1 = entrada();

$conteiner_2 = entrada();

$interseccao = array();

$uniao = array();


foreach ($frases as $elemento) {
    array_push ($uniao, $elemento);
}

foreach ($palavras as $elemento) {

    $replica = false;
    
    foreach ($uniao as $conteudo) {
        if ($elemento == $conteudo) {
            $replica = true;
        }
    }

    if (! $replica) {
        array_push ($uniao, $elemento);
    }

}

print_r($interseccao);

print_r($uniao);
