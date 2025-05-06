<?php


// Exemplo

function teste () {

    // Corpo da função

    echo "Função média \n";

}


// Média de três números

function media (int $a, float $b = 0, int $c = 0) { // Podemos ou não colocar os tipos no argumento, e misturar tipos | 

    $soma = $a + $b + $c;

    $media = $soma / 3;

    // echo $media . "\n";

    printf("Média: %.2f\n", $media);

    return $media; // Podemos, ou não, retornar alguma variável ou resultado
}




// Programa principal

$a = 10;
$b = 20;
$c = 30;

// media (); Se chamasse a função sem colocar o a, o b, e o c, mesmo eles existindo, então em outro escopo
teste ();

media (1, 2, 3); // É obrigatório que você defina todos os parâmetros da função

media (5, 16, 20);

media (23, $b, $c);