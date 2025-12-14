<?php

require_once("Vehicle.php");

class Bus extends Vehicle {

    // Methods

    public function totalPrice() : float {

        $totalPrice = $this -> getFixedPrice() + $this -> getMileage() * $this -> getAdditionalPrice();

        return parent::roundedPrice($totalPrice);

    }



    // Magic methods

    public function __construct() {

        $this -> setAdditionalPrice(4.2);
        
    }

    public function getName () : string{

        return "ônibus";
        
    }

}