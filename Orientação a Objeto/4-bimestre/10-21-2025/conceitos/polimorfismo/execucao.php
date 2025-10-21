<?php

require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");
require_once("modelo/Rottweiler.php");


$animal = new Animal();
print($animal -> falar() . "!\n");

$cachorro = new Cachorro();
print($cachorro -> falar() . "!\n"); 

$gato = new Gato();
print($gato -> falar() . "!\n");
print($gato -> falarAnimal() . "!\n");

$rottweiler = new Rottweiler();
print($rottweiler -> falar() . "\n");

/*
require_once("modelo/Sobrecarga.php");

$sobrecarga1 = new Sobrecarga();

$sobrecarga1 -> escrever("Como sabes se ainda tem um gato ai?");
$sobrecarga1 -> escrever("Dai-me nada, não há necessidade");
*/