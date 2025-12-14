<?php 

require_once("model/Comercial.php");
require_once("model/Industrial.php");
require_once("model/Residencial.php");

$choiceType = readline("Tipo? ");

$type = null;

switch ($choiceType) {

    case 1:

        $type = new Residencial ();

        break;

    case 2: 

        $type = new Comercial ();

        break;

    case 3: 

        $type = new Industrial ();

        break;

}

$consumption = readline ("Consumo: ");

$type -> setConsumption ($consumption);


print($type . "\n");

