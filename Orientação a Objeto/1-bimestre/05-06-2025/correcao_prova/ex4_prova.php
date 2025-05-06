<?php

//1- Ler números e armazenar em um valor
$numeros = array();
for($i=1; $i<=8; $i++) {
    $num = readline("Informe um número: ");
    array_push($numeros, $num);
}

//2- Percorrer o vetor, calculando a quantidade de PARES e ÍMPARES
$qtdPar = 0;
$qtdImpar = 0;
foreach($numeros as $n) {
    //Verificar se é PAR ou IMPAR
    if($n % 2 ==0)
        $qtdPar++;
    else
        $qtdImpar;
}

echo "Pares: " . $qtdPar;
echo "Ímpares: " . $qtdImpar;