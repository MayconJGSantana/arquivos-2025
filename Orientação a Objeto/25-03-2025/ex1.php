<?php


function equacao ($numero) {

    $resultado = 7 * $numero + 3;

    return $resultado;
}

for ($i = 0; $i < 5; $i++) {
    $numero = readline("Entre com um número: ");

    printf ("\tResultado: %f\n", equacao ($numero));
}