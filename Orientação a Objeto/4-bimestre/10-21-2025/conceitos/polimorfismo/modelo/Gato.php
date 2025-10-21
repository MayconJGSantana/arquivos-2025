<?php

require_once("Animal.php");

class Gato extends Animal {

    // Atributos


    // Métodos

    public function falar() {

        return "Miau Miau MIAU!";

    }

    public function falarAnimal() {

        return parent::falar();

    }

}