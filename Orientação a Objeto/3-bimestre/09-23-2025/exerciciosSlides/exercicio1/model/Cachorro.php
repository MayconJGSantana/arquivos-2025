<?php

require_once("Animal.php");

class Cachorro extends Animal {
    
    // Métodos 

    public function latir() : string {

        return "AU!";

    }

}