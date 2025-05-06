<?php

for($i = 0; $i < 3; $i++) {
    $numero = (int) readline("Entre com um número: ");

    if ($i == 0) {
        $menor_numero = $numero;
    }
    else {
        if ($menor_numero > $numero) {
            $menor_numero = $numero;
        }
    }
}

print("Menor número: $menor_numero");