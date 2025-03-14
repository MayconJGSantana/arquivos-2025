<?php

exercicio3();

function exercicio1() {

    //While

    $n = 1;

    echo "Com o comando While, a contagem de 1 a 10: " . "\n";

    while($n <= 10) {
        echo $n . "\n";
        $n++;
    }

    echo "\n";


    //For

    echo "Com o comando For, a contagem de 1 a 10: " . "\n";

    for($i = 1; $i <= 10; $i++) {
        echo $i . "\n";
    }

    echo "\n";


    //Do While

    $n = 1;

    echo "Com o comando Do While, a contagem de 1 a 10: " . "\n";

    do{
        echo $n . "\n";
        $n++;
    } while ($n <= 10);

}


function exercicio2() {

    //For pois já sei o início e fim

    $soma = 0;

    for($i = 1; $i <= 100; $i++) {
        $soma += $i;
    }

    echo $soma . "\n";

}


function exercicio3() {
    
    $div = 3;

    for($i = 1; $i <= 50; $i++) {
        
        if($i%$div == 0) {
            echo $i . " é divísivel por 3. \n";
        }

    }
}