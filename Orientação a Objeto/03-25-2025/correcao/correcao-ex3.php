<?php


// Ler os números

$num1 = readline("informe o primeiro número: ");

$num2 = readline("Informe o segundo númeor: ");

$num3 = readline("Informe o terceiro número: ");


// Encontrar o menor entre os 3 números

$menor = 0;

if ($num1 < $num2) {
    $menor = $num1;
}
else {
    $menor = $num2;
}

if ($num3 < $menor) {
    echo "Menor: " . $num3;
}
else {
    echo "Menor: " . $menor;
}