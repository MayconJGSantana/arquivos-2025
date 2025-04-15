<?php

$frases = array (
                 "eita Deus",
                 "vale a pena?",
                 "falta bastante",
                 "Literalmente tudo",
                 "não é mas " 
);

$palavras = array(
                  "ata",
                  "fale",
                  "obvio",
                  "esqueci",
                  "imaterial"
);
$silabas = array(
                 "eu",
                 "não",
                 "gra",
                 "de",
                 "di"
);

$caracteres = array(
                    "v",
                    "c",
                    "p",
                    "e",
                    "m"
);

function percorre_lista ($vetor) {

    foreach ($vetor as $chave => $elemento) {

        print($elemento);
        if ($chave != count($vetor) - 1) {
            print (" | ");
        }

    }
}

percorre_lista($frases);
print("\n");
percorre_lista($palavras);
print("\n");
percorre_lista($silabas);
print("\n");
percorre_lista($caracteres);
print("\n");