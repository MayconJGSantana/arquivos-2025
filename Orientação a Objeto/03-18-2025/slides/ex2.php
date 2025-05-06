<?php

$numero = readline("Entre com um número: ");
$numero_sequencia = $numero - 1;

while ($numero_sequencia != -1) {
    echo "\t * " . $numero_sequencia . "\n";

    $numero_sequencia--;
}