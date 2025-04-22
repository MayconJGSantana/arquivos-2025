<?php

// Declaração de funções

function entrada() : array {
    
    $valores = array();

    for ($i = 1; $i <= 5; $i++) {
        
        $numero = (int) readline("Teste: ");

        array_push($valores, $numero);

    }

    return $valores;

}

function fahrenheit(int $celsius) : float {

    $valor_fahrenheit = $celsius * 1.8 + 32;

    return $valor_fahrenheit;

}

function fatorial(int $valor) : int {

    $valor_fatorial = $valor;

    for ($i = $valor - 1; $i > 1; $i--) {

        $valor_fatorial *= $i;

    }

    return $valor_fatorial;

}

function funcao(int $x) : float {

    $resultado = (pow($x, 2) + 2 * $x + 4) / 2 * $x;

    return $resultado;
}

function transforma_em_fahrenheit(int $elemento) {

    $elemento_fahrenheit = fahrenheit($elemento);

    return $elemento_fahrenheit;

}


function transforma_em_fatorial(int $elemento) {

    $elemento_fatorial = fatorial($elemento);

    return $elemento_fatorial;

}


function transforma_em_y(int $elemento) : float {

    $elemento_funcao = funcao($elemento);

    return $    $elemento_funcao = funcao($elemento);
    ;

}

function cria_vetores(array $vetor_original, array &$vetor_fahrenheit, array &$vetor_fatorial, array &$vetor_funcao) {

    foreach ($vetor_original as $valor) {

        array_push($vetor_fahrenheit, transforma_em_fahrenheit($valor));
        if ($valor >= 1) {
            array_push($vetor_fatorial, transforma_em_fatorial($valor));
        }
        else {
            array_push($vetor_fatorial, 0);
        }
        array_push($vetor_funcao, transforma_em_y($valor));

    }

}

function imprime_vetor(array $vetor) {

    print("\t");

    foreach ($vetor as $chave => $valor) {

        print($valor);

        if (count($vetor) - 1 == $chave) {
            print("\n");
        }
        else {
            print(", ");
        }
    }
}



$vetor_original = entrada();

$vetor_fahrenheit = array();
$vetor_fatorial = array();
$vetor_funcao = array();

cria_vetores($vetor_original, $vetor_fahrenheit, $vetor_fatorial, $vetor_funcao);

print("Vetor fahrenheit: \n");
imprime_vetor($vetor_fahrenheit);
print("Vetor fatorial: \n");
imprime_vetor($vetor_fatorial);
print("Vetor funcao: \n");
imprime_vetor($vetor_funcao);

