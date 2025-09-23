<?php

require_once("model/Gato.php");
require_once("model/Cachorro.php");

$gatoGeremias = new Gato;
$gatoGeremias -> setNome("Geremias")
              -> setRaca("Malhado");

print($gatoGeremias -> getDados() . $gatoGeremias -> miar() . "\n" . "\n");


$gatoDouglas = new Gato;
$gatoDouglas -> setNome("Douglas")
             -> setRaca("Sphinx");

print($gatoDouglas -> getDados() . $gatoDouglas -> miar() . "\n" . "\n");


$cachorroJack = new Cachorro;
$cachorroJack -> setNome("Jack")
              -> setRaca("Pug");

print($cachorroJack -> getDados() . $cachorroJack -> latir() . "\n" . "\n");


$cachorroFill = new Cachorro;
$cachorroFill -> setNome("Fill")
              -> setRaca("German Shepherd");

print($cachorroFill -> getDados() . $cachorroFill -> latir() . "\n");
