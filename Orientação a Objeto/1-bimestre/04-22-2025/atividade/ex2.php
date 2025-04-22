<?php

function entrada() : array {
    $retangulos = array();
    
    for ($i = 1; $i <= 5; $i++) {
    
        $grandezas = array();
    
        $largura = readline("Entre com a largura: ");
    
        $comprimento = readline("Entre com a comprimento: ");
    
        $grandezas["largura"] = $largura;
        $grandezas["comprimento"] = $comprimento;

        $posicao = "retangulo_" . $i;
    
        $retangulos[$posicao] = $grandezas;
    }

    return $retangulos;
}

function faz_area ($largura, $comprimento) : float {

    $area = $largura * $comprimento;

    return $area;
}

function imprime_areas (array $vetor) {

    $posicao_retangulo = 0;

    foreach ($vetor as $retangulo) {

        $posicao_retangulo++;

        print(str_repeat("-", 15) . $posicao_retangulo . "° Retângulo" . str_repeat("-", 15) . "\n");

        print("\t" . "Área -> " . faz_area($retangulo["largura"], $retangulo["comprimento"]) . "\n\n");

    }

}


// Programa principal

$retangulos = entrada();

imprime_areas($retangulos);





