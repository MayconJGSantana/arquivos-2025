<?php

$numero = null;

for ($i = 1; $i <= 10; $i++) {
    $numero = (int) readline("Entre com um número para descobrir se ele é negativo ou não: ");
    if ($numero < 0) {
        echo "\tO número é negativo\n";
    }
    else if ($numero == 0) {
        echo "\tZero é nulo\n";
    }
    else { 
        echo "\tO número é positivo\n";
    }
}