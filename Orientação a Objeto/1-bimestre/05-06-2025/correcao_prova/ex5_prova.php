<?php

//Leitura carro 1
$carro1["modelo"] = readline("Informe o modelo: ");
$carro1["placa"] = readline("Informe a placa: ");
$carro1["anoFabricacao"] = readline("Informe o ano de fabricação: ");

//Leitura carro 2
$carro2["modelo"] = readline("Informe o modelo: ");
$carro2["placa"] = readline("Informe a placa: ");
$carro2["anoFabricacao"] = readline("Informe o ano de fabricação: ");

//Imprimir os dados do carro mais novo
if($carro1["anoFabricacao"] > $carro2["anoFabricacao"]) {
    echo "Modelo: " . $carro1["modelo"] . "\n";
    echo "Placa: " . $carro1["placa"] . "\n";
    echo "Ano: " . $carro1["anoFabricacao"] . "\n";
    //print_r($carro1);
} else {
    echo "Modelo: " . $carro2["modelo"] . "\n";
    echo "Placa: " . $carro2["placa"] . "\n";
    echo "Ano: " . $carro2["anoFabricacao"] . "\n";
}