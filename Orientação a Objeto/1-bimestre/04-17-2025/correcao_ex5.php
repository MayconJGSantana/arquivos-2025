<?php

// Ler os dados de 4 pessoas, armazenando em uma matriz

$pessoas = array();

for ($i = 1; $i <= 4; $i++) {

    echo str_repeat("-", 15) . $i + 1 . "° Pessoa" . str_repeat("-", 15);
    $pessoa["nome"] = readline("Informe o nome: ");
    $pessoa["idade"] = readline("Informe a idade: ");
    $pessoa["cidadeNatal"] = readline("Informe a cidade natal: ");
    $pessoa["profissao"] = readline("Informe a profissão: ");

    array_push($pessoas, $pessoa);
}

// print_r($pessoas);

$pessoaMaisVelha = $pessoas[0];

foreach ($pessoas as $elemento) {

    if ($elemento["idade"] > $pessoaMaisVelha["idade"]) {
        
        $pessoaMaisVelha = $elemento;

    }
}

// Dados da pessoa mais velha

echo "\n";
echo "Dados da pessoa mais velha:" . "\n";
echo "\t" . "Nome: " . $pessoaMaisVelha["nome"] . "\n";
echo "\t" . "Idade: " . $pessoaMaisVelha["idade"] . "\n";
echo "\t" . "Cidade natal: " . $pessoaMaisVelha["cidadeNatal"] . "\n";
echo "\t" . "Profissão: " . $pessoaMaisVelha["profissao"] . "\n";

