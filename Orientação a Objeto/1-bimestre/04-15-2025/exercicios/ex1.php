<?php

function media ($soma_total, $quantidade_elementos) : float {

    $media = $soma_total / $quantidade_elementos;
    $media = round($media, 2, PHP_ROUND_HALF_UP); // falta
    return $media;
}

system("clear");

// Leitura de 10 elementos e média deles

$numeros = array();

for ($i = 0; $i < 10; $i++) {

    print (str_repeat("-", 15) . $i + 1 . "° número" .  str_repeat("-", 15) . "\n");

    $numero = readline("Entrada: ");
    array_push($numeros, $numero);

    print("\n");

}

system("clear");

$somatorio = 0;

foreach ($numeros as $numero) {

    $somatorio += $numero;

} // A função array_sum(<vetor>) já soma todos os elementos

$media = media($somatorio, count($numeros));

print("A média é " . $media . "\n");

