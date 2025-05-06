<?php

while (true) {
    $numero = readline("Entre com um número: ");

    if ($numero == 0) {
        print("\033[31mValor inválido\033[m");
    }
    
    else {
        break;
    }
}


if ($numero > 0) {
    $dobro = $numero * 2;
    print("\tJá que o número é positivo, o dobro dele é: $dobro\n");
} else {
    $triplo = $numero * 3;
    print("\tJá que o número é negativo, o triplo dele é: $triplo\n");
}
