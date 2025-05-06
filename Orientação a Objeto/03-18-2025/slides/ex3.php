<?php

$pessoas = [];

for ($i = 0; $i < 5; $i++) {


    $nome = readline("Entre com seu nome: ");

    $peso = readline("Entre com o peso (quilogramas): ");
    
    $altura = readline("Entre com a altura (metros): ");

    $imc = $peso / ($altura * $altura);

    $pessoas[$i]["nome"] = $nome;

    $pessoas[$i]["peso"] = $peso;

    $pessoas[$i]["altura"] = $altura;

    $pessoas[$i]["imc"] = $imc;

}

for ($i = 0; $i < 5; $i++) {
    // echo "O " . $pessoas[$i]["nome"] . " com peso " . $pessoas[$i]["peso"] . " e altura " . $pessoas[$i]["altura"] . " tem IMC: " . $pessoas[$i]["imc"] . "\n";
    printf("O %s com peso %f e altura %f, tem IMC: %f.2\n", $pessoas[$i]["nome"], $pessoas[$i]["peso"], $pessoas[$i]["altura"], $pessoas[$i]["imc"]); // %d é para inteiro, %s é para string, %f é para float
}