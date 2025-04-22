<?php

// Função para procurar um número em um array
function existe(array $vet, int $num) {
    foreach($vet as $v) {
        if($v == $num) {
            return true;
        }
    }
    
    return false;
}
function imprime(array $vet) {
    foreach ($vet as $valor) {
        echo "$valor\n";
    }
}

//PROGRAMA PRINCIPAL
//Vetor A - Deve ser lido
$vetA = array();
echo "\nInforme os elementos de B: \n";
for($i=0; $i<5;$i++) {
    $num = readline("Informe um número: ");
    array_push($vetA, $num);
}


//Vetor B - Deve ser lido
$vetB = array();
echo "\nInforme os elementos de B: \n";
for($i=0; $i<5;$i++) {
    $num = readline("Informe um número: ");
    array_push($vetB, $num);
}

// Conjunto C - Intersecção (verificar se  um elemento de A existe em B)7
$vetC = array();
foreach ($vetA as $a) {
    if(existe($vetB, $a)) {
        array_push($vetC, $a);
    }
}
echo "\nVetor C: intersecção: \n";
imprime($vetC);

//Conjunto D - União de A e B
$vetD = array();
foreach($vetA as $a) 
    if (! existe($vetD, $a))
        array_push($vetD, $a);
foreach($vetB as $b) 
    if (! existe($vetB, $b))
        array_push($vetD, $b);
echo "\nVetor D: união: \n";
imprime($vetD);
    
