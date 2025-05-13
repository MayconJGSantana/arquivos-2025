<?php

class Retangulo {

    public $altura;
    public $base;



    function area() : float {

        $area = $this -> altura * $this -> base;

        return $area;

    }

    function perimetro() : float {

        $perimetro = $this -> altura * 2 + $this -> base * 2;

        return $perimetro;

    }
}

for ($i = 1; $i <= 3; $i++) {

    $altura = readline("Qual a altura do seu retângulo? ");
    
    $base = readline("Qual o tamanho da base do seu retângulo? ");

    $retangulo = new Retangulo;

    $retangulo -> altura = $altura;

    $retangulo -> base = $base;

    print("A àrea do seu retângulo é: " . $retangulo -> area() . "\n");

    print("O perímetro do seu retângulo é: " . $retangulo -> perimetro() . "\n");

}

