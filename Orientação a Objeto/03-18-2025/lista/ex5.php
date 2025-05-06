<?php

$primeiro_numero = readline("Primeiro número: ");

$segundo_numero = readline("Segundo número: ");

if ($primeiro_numero > $segundo_numero) {
    for ($i = $segundo_numero; $i <= $primeiro_numero; $i++) {
        if ($i % 5 == 0) {
            print("\t$i\n");
        }
    }
}
else if ($primeiro_numero == $segundo_numero) {
    print("Impossível\n");
}
else {
    for ($i = $primeiro_numero; $i <= $segundo_numero; $i++) {
        if ($i % 5 == 0) {
            print("\t$i\n");
        }
    }
}