<?php

require_once("model/Instrumento.php");
require_once("model/Prova.php");
require_once("model/Participacao.php");
require_once("model/Trabalho.php");


// Cabeçalho
print(str_pad("AVALIANDO", 40, "-", STR_PAD_BOTH) . "\n");


// Mostra as opções
$opcoes = ["Prova", "Participação", "Trabalho"];

foreach ($opcoes as $chave => $opcao) {

    printf("[ %d ] - %s", $chave + 1, $opcao);

    print("\n");

}

$instrumentos = array(3);

for ($i = 0; $i < 3; $i++) {

    // Cabecalho
    $indice = $i + 1 . "° instrumento";

    print(str_pad($indice, 20, "-", STR_PAD_BOTH) . "\n");


    // Escolhe opção e valida
    while (true) {

        $escolha = readline("Qual instrumento de avaliação usarás? ");

        if ($escolha > count($opcoes) || $escolha <= 0) {

            print("\t" . "\033[31m" . "Valor inválido! Tente novamente." . "\033[m" . "\n");

        }
        else {

            break;

        }

    }

    print("\n");
    

    // Cria um objeto instrumento de acordo com a opção escolhida
    switch ($escolha) {

        case 1:

            $instrumentos[$i] = new Prova();

            break;

        case 2:

            $instrumentos[$i] = new Participacao();

            break;

        case 3:

            $instrumentos[$i] = new Trabalho();

            break;

    }

    // Entra a nota
    $instrumentos[$i] -> setNota(readline("Nota? "));

    print("\n");

}


$somaNotas = 0;

// Mostra as notas finais
foreach ($instrumentos as $chave => $instrumento) {

    print($chave + 1 . "° Instrumento" . "\n");

    print("Nota final: " . $instrumento -> getNotaFinal() . "\n\n");

    $somaNotas += $instrumento -> getNotaFinal();

}

print("\n");


// Faz e mostra a média
$media = $somaNotas / count($instrumentos);

print("Média final do aluno: " . $media . "\n");