<?php

function area($ret) {
    $area = $ret["base"] * $ret["altura"];

    return $area;
}

// Prgrama inicial

//1- Leitura dos dados
$retangulos = array();
for($i=0; $i<5; $i++) {
    $base = readline("Informe a base: ");
    $altura = readline("Informe a altura: ");
    //$ret = array("base" => $base, "altura" => $altura);

    $ret["base"] = $base;
    $ret["altura"] = $altura;
    array_push($retangulos, $ret);
}

//print_r(retangulos):

//2  Cálculo e impressão da área
foreach ($retangulos as $r) {
    $area = area($r);
    printf("Retangulo %d X %d = %d\n",
           $r["base"], $r["altura"], $area);
}