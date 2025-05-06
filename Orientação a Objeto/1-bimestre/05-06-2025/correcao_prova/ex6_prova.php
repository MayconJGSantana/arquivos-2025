<?php

$pc1 = array("processador" => "Core i7",
             "memoria" => "8 GB",
             "preco" => 2500.00);

$pc2 = array("processador" => "Core i5",
             "memoria" => "16 GB",
             "preco" => 3800.00);

$pcs = array($pc1, $pc2);

//Laço para imprimir os dados dos vetores
foreach($pcs as $pc) {
    /*
    echo "Processador: " . $pc["processador"];
    echo " - Memória: " . $pc["memoria"];
    echo " - Preço: " $pc["preco"] . "\n";
    */
    foreach($pc as $dados)
        echo $dado . " ";
    echo "\n";
}  