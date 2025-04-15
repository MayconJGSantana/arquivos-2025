<?php

$vetor = array (5, 7, 8, 4, 1, 0, 3);

$vetor1 = array (10, 12, 15);
$vetor2 = array (22, 21, 4);
$vetor3 = array (5, 8, 54);

$matriz = array($vetor1, $vetor2, $vetor3);

$pessoal = array(
                 "nome" => "Daniel",
                 "idade" => 27,
                 "escola" => "IFPR"
); // Vetor associativo

// Diversos

function pula_linha () : void {

    echo "\n";

}



// Listas

function imprime_elemento ($vetor) : void {

    // Imprime o 4 elemento de um array
    
        // echo $vetor;  ->  Dá erro pois precisamos especificar o elemento
    
    echo "Quarto elemento: " . $vetor[4];
    
    
    // Imprime o segundo elemento
    
    echo "Segundo elemento: " . $vetor[1];

}


function imprime_todos_elementos ($vetor) : void {

    // Imprimir todos os elementos
    
        /* Maneiras:
    
            echo $vetor[0];
    
        */
    
        // Melhor
    
    for ($i = 0; $i < count($vetor); $i++) { // $i  ->  index
    
        $posicao_padronizada = $i + 1;

        echo $posicao_padronizada . "° elemento  ->  " . $vetor[$i] . "\n";
    
    }

}

function percorre_lista ($vetor) : void {

    foreach ($vetor as $posicao => $elemento) {

        $posicao_padronizada = $posicao + 1;

        echo $posicao_padronizada . "° elemento  ->  " . $elemento . "\n";

    }

}

function adicao_elemento (&$vetor) : void {

    echo "Vetor anterior  ->" . "\n";
    percorre_lista($vetor);
    pula_linha();

    array_push($vetor, rand(0, 100));
    echo "Vetor novo  ->" . "\n";;
    percorre_lista($vetor);

}

function conteudo_lista ($vetor) : void {

    // Escreve os elementos sem especificação

    print_r ($vetor);
}



// Matriz

function imprime_elemento_matriz ($matriz) : void {

    // Imprime o terceiro elemento da segunda posição
    
    echo $matriz[1][2];

}

function percorre_matriz ($matriz) : void {

    foreach ($matriz as $vetor) {

        foreach ($vetor as $elemento) {


        }
    }
}



// Listas associativas

function imprime_elemento_associativo ($vetor) {

    echo $vetor["idade"];
    echo "\n";

}

function percorre_associativo ($vetor) {

    foreach ($vetor as $chave => $elemento) {

        $posicao = $chave;
        $posicao = strtolower($posicao);
        $posicao = ucfirst($posicao);


        echo $posicao . "  ->  " . $elemento . "\n";
    }
}




// Matriz associativa





// Código principal

percorre_associativo($pessoal);

