<?php

$frases = array(
                "sentido",
                "Anarcadismo é legal",
                "Falta de lógica",
                "Que ironia incrível",
                "A vida é bela."
);

$palavras = array(
                  "sentido",
                  "maneiro",
                  "passaram",
                  "rir",
                  "sim"
);

$interseccao = array();

$uniao = array();

for ($i = 0; $i < 5; $i++) {

    if ($frases[$i] == $palavras[$i]) {

        array_push ($interseccao, $frases[$i]);
    }

}

foreach ($frases as $elemento) {
    array_push ($uniao, $elemento);
}

foreach ($palavras as $elemento) {

    $replica = false;
    
    foreach ($uniao as $conteudo) {
        if ($elemento == $conteudo) {
            $replica = true;
        }
    }

    if (! $replica) {
        array_push ($uniao, $elemento);
    }

}

print_r($interseccao);

print_r($uniao);
