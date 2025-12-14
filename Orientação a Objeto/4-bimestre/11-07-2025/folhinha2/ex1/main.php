<?php

require_once("model/Car.php");
require_once("model/Van.php");
require_once("model/MicroBus.php");
require_once("model/Bus.php");

$options = ["Carro", "Van", "Micro-ônibus", "Ônibus"];

foreach ($options as $chave => $option) {

    printf("[ %d ] - %s", $chave + 1, $option . "\n");
    
}

$choice = readline("Qual veículo? ");

switch ($choice) {

    case 1:

        $vehicle = new Car(); 

        break;

    case 2:

        $vehicle = new Van(); 

        break;

    case 3:

        $vehicle = new MicroBus(); 

        break;

    case 4:

        $vehicle = new Bus(); 

        break;

}

$fixedPrice = readline("Preço fixo: ");
$mileage = readline("Quilometragem? ");

$vehicle -> setFixedPrice($fixedPrice)
         -> setMileage($mileage);

print($vehicle . "\n");
