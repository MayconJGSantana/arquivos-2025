<?php


$pi = 3.14;

function area ($raio, $pi) {

    $area = $pi * pow($raio, 2);

    return $area;

}

function comprimento ($raio, $pi) {

    $comprimento = 2 * $pi * $raio;

    return $comprimento;
}


for ($i = 0; $i < 3; $i++) {

    $raio = readline("Coloque o raio de um círculo: ");

    printf ("\tÁrea = %.2f\n", area ($raio, $pi));
    printf ("\tComprimento = %.2f\n", comprimento ($raio, $pi));

}
