<?php

$palavras = array();

$clone_palavras = array();

for ($i = 0; $i < 5; $i++) {
    
    print(str_repeat("-", 15) . $i  + 1 . "° Palavra" . str_repeat("-", 15) . "\n");

    $palavra = readline("\t" . "Palavra: ");

    array_push ($palavras, $palavra);
    
    print("\n");

}

foreach ($palavras as $elemento) {

    array_push ($clone_palavras, $elemento);
}

print("Lista clone:" . "\n");
print("\t");
foreach ($clone_palavras as $chave => $elemento) {

    print($elemento);
    if ($chave != count($clone_palavras) - 1) {
        print(", ");
    }
}

print("\n");
