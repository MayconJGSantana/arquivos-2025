<?php

$valor_arrecadado = 0;

print(str_repeat("-", 30) . "\n");
print("Objetivo: Calcular o valor arrecadado\n");
print(str_repeat("-", 30) . "\n");

print("\033[1mAviso:\033[m para parar o código escreva um valor negativo, ou entre com nenhum valor.\n");

while (true) {

    $valor_contribuido = (int) readline("Entre com o valor dado pelo aluno: ");
    
    if ($valor_contribuido == null || $valor_contribuido < 0) {
        // print("\tTens certeza que queres finalizar a contagem?")
        break;
    }

    $valor_arrecadado += $valor_contribuido;

}
print("\tValor arrecadado: $valor_arrecadado\n");