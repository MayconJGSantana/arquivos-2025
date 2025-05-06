<?php

$quantidade_pares = 0;

$quantidade_impares = 0;

for ($i = 0; $i < 10; $i++) {
    $numero = (int) readline("Entre com um número: ");

    if ($numero % 2 == 1) {
        $quantidade_impares++;
    }
    else {
        $quantidade_pares++;
    }
    
}

print("\tQuantidade de números pares: $quantidade_pares\n");
print("\tQuantidade de números ímpares: $quantidade_impares\n");
